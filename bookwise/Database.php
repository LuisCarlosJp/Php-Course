<?php


class Database
{
    private $db;

    public function __construct($config)
    {
        $user = $config['user'] ?? null;
        $password = $config['password'] ?? null;

        // Cria a conexão PDO
        $this->db = new PDO($this->getDsn($config), $user, $password);
    }

    private function getDsn($config)
    {
        $driver = $config['driver'];
        unset($config['driver'], $config['user'], $config['password']);

        // Monta DSN para MySQL, PostgreSQL etc
        $dsn = $driver . ':' . http_build_query($config, '', ';');

        // Caso especial para SQLite (só precisa do caminho do arquivo)
        if ($driver === 'sqlite') {
            $dsn = $driver . ':' . $config['database'];
        }

        return $dsn;
    }

    public function query($query, $class = null, $params = [])
    {
        $prepare = $this->db->prepare($query);
        if ($class) {
            $prepare->setFetchMode(PDO::FETCH_CLASS, $class);
        }
        $prepare->execute($params);

        return $prepare;
    }
}


$database = new Database(config('database'));
