<?php

namespace Zyna\CFD1\D1;

use Illuminate\Database\SQLiteConnection;
use Zyna\CFD1\CloudflareD1Connector;
use Zyna\CFD1\D1\Pdo\D1Pdo;

class D1Connection extends SQLiteConnection
{
    protected $config; // ✅ Remove type declaration to match parent class

    public function __construct(
        protected CloudflareD1Connector $connector,
        $config = [] // ✅ Remove type declaration here too
    ) {
        parent::__construct(
            new D1Pdo('sqlite::memory:', $this->connector),
            $config['database'] ?? '',
            $config['prefix'] ?? '',
            $config,
        );

        $this->config = $config; // ✅ Assign config manually
    }

    protected function getDefaultSchemaGrammar()
    {
        return new D1SchemaGrammar($this); // ✅ Pass connection to grammar
    }

    public function d1(): CloudflareD1Connector
    {
        return $this->connector;
    }
}
