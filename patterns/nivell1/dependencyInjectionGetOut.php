<?php

interface Essentials {
  
}

class Keys implements Essentials {

}

class Wallet implements Essentials {

}

class Card implements Essentials {

}

class Phone implements Essentials {

}

class GoingOut {

    private array $essentials;
/*
The constructor of the GoingOut class now accepts
a variable number of Essentials objects using
the splat operator (...).
*/
    public function __construct(Essentials ...$essentials) {
        $this->essentials = $essentials;
    }


    public function amIReady(): bool {

        $ready = false;

        foreach ($this->essentials as $essentials) {
            if( $essentials instanceof Essentials) {
                $ready = true;
            }
        }
    
        return $ready;
    }
}

$keys = new Keys();
$wallet = new   Wallet();
$metroCard = new Card();
$phone = new Phone();


$goingOut = new GoingOut($keys, $wallet, $metroCard, $phone);

if($goingOut->amIReady()) {
    echo "I'm ready to go out!";
} else {
    echo "I'm not ready. Wait!";
}





