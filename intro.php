<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<?php

$product = "Phone";
$age = 28;
$weight = 70.5;
$is_male = true;

echo "The product is ", $product, "<br>";
echo "Age ", $age, " allowed: ", bool_to_string(is_allowed($age));


print_header();


function is_allowed(int $age){
    return $age <= 28;
}

function bool_to_string(bool $value){
    return $value ? "True" : "False";
}


function print_header() {
    echo "
    <h1>My Awesome Website</h1>
    On this site, you can shop electronic products
    ";
}


class Phone {
    public int $id;
    public string $title;
    public int $ram;
    public int $storage;
    public string $thumbnail;
    public string $network;
    public float $price;

    public function __construct(int $id = 0, string $title = "", int $ram = 0, int $storage = 0, string $thumbnail = "", string $network = "", float $price = 0)
    {
        $this->id = $id;
        $this->title = $title;
        $this->ram = $ram;
        $this->storage = $storage;
        $this->thumbnail = $thumbnail;
        $this->network = $network;
        $this->price = $price;
    }
};

$p1 = new Phone(1, "Galaxy A53", 8, 256, "1bd92e5b818ccff86049765b829ff116f7a3a586_1684911875.webp", "5G", 12000000);
$p2 = new Phone();
$p2->id = 2;
$p2->network = "4G";
$p2->title = "Nokia 2.2";
$p2->storage = 128;
$p2->ram = 4;
$p2->thumbnail = "1f8bb150b142112d1f7560d5313d1d73ca67aa28_1677060264.webp";

$p3 = new Phone(
    id: 3,
    title: "Honor X9a",
    ram: 12,
    storage: 128,
    thumbnail: "f16c95c9de79fb069e8d51853334c5f7bf87eace_1683464854.webp",
    network: "5G",
    price: 10000000
);

$phones = [
    $p1,$p2, $p3
];

?>

<div class="container">
    <?php foreach($phones as $phone): ?>
    <div class="product">
        <div><img src="img/<?= $phone->thumbnail?>"></div>
        <div>Price: <?= $phone->price ?></div>
        <div>Title: <?= $phone->title ?></div>    
        <div>RAM: <?= $phone->ram ?> </div>
        <div>Storage: <?= $phone->storage ?></div>
        <div>Network: <?= $phone->network ?></div>
    </div>
    
    <?php endforeach; ?>

</div>
</body>