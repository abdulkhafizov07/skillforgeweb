<?php

return [
    "class" => "yii\db\Connection",
    "dsn" => sprintf(
        "mysql:host=%s;dbname=%s",
        getenv("SKILLFORGE_DB_HOST") ?: "localhost",
        getenv("SKILLFORGE_DB_NAME") ?: "yii2basic",
    ),
    "username" => getenv("SKILLFORGE_DB_USER") ?: "root",
    "password" => getenv("SKILLFORGE_DB_PASSWORD") ?: "",
    "charset" => "utf8mb4", // more modern, supports emojis

    // Production optimization: enable schema caching
    "enableSchemaCache" => getenv("SKILLFORGE_DEBUG") != "true",
    "schemaCacheDuration" => 3600, // 1 hour
    "schemaCache" => "cache",
];
