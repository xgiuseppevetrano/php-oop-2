<?php
    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Food.php';
    require_once __DIR__ . '/classes/User.php';
    require_once __DIR__ . '/classes/RegisteredUser.php';
    require_once __DIR__ . '/classes/CreditCard.php';

    $food = new Food('Croccantini', 10.20, 10, '2022-10-10', 'Gatto');

    $user = new User('Marco', 'Rossi', 'marco.rossi@gmail.com');
    $registeredUser = new RegisteredUser('Mario', 'Rossi', 'mario.rossi@gmail.com');

    try {
        $visa = new CreditCard('9999 9999 9999 9999', '2022-09-22', 'Visa', 'Marco', 'Rossi', 123);
        $user->setCreditCard($visa);
    } catch (Exception $e) {
        echo $e->getMessage();
    }

    try {
        $mastercard = new CreditCard('8888 8888 8888 8888', '2022-03-14', 'Mastercard', 'Mario', 'Rossi', 456);
        $user->setCreditCard($mastercard);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
?>