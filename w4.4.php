<?php
trait Cacheable {
    private $cache = [];

    public function setCache($key, $data) {
        $this->cache[$key] = $data;
    }

    public function getCache($key) {
        return isset($this->cache[$key]) ? $this->cache[$key] : null;
    }
}

class DataProvider {
    use Cacheable;

    public function fetchData($key) {
        $cachedData = $this->getCache($key);
        if ($cachedData) {
            print "Извлечение данных из кэша для ключа: {$key}<br>";
            return $cachedData;
        }

        $data = "Data for {$key}";
        $this->setCache($key, $data);
        print "Извлечение новых данных для ключа: {$key}<br>";
        return $data;
    }
}

class ProductRepository {
    use Cacheable;

    public function getProduct($productId) {
        $cachedProduct = $this->getCache($productId);
        if ($cachedProduct) {
            print "Извлечение продукта из кэша для идентификатора: {$productId}<br>";
            return $cachedProduct;
        }

        $product = "Product ID: {$productId}";
        $this->setCache($productId, $product);
        print "Получение нового продукта для идентификатора: {$productId}<br>";
        return $product;
    }
}

$dataProvider = new DataProvider();
$dataProvider->fetchData("users");

$productRepo = new ProductRepository();
$productRepo->getProduct(101);
$productRepo->getProduct(101);