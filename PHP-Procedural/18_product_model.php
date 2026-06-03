<?php
class ProductModel
{
    public function __construct(private PDO $pdo)
    {
    }

    public function findById(int $id): array|false
    {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = :id");
        $stmt->execute(['id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

$pdo = new PDO("mysql:host=localhost;dbname=testdb", "root", "");
echo "Product model ready";
