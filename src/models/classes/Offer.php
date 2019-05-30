<?Php

//..........Offer Object Factory..........

class Offer
{
    private $Username;
    private $City;
    private $Offer;
    private $Restaurant;
    private $Price;
    private $Gender;
    private $RestaurantBranch;
    private $Date;


    public function __construct($Username, $City, $Offer, $Restaurant, $Price, $Gender, $RestaurantBranch, $Date)
    {
        $this->Username = $Username;
        $this->City = $City;
        $this->Offer = $Offer;
        $this->Restaurant = $Restaurant;
        $this->Price = $Price;
        $this->Gender = $Gender;
        $this->RestaurantBranch = $RestaurantBranch;
        $this->Date = $Date;
    }
    public function Post($database)
    {
        $offers = $database->PostOffer($this->Username, $this->Restaurant, $this->Offer, $this->Price, $this->RestaurantBranch, $this->Date, $this->City, $this->Gender);
        header("location:/");
    }
}

Class OfferFactory{
    public static function create ($Username, $City, $Offer, $Restaurant, $Price, $Gender, $RestaurantBranch, $Date)
    {
        return new Offer($Username, $City, $Offer, $Restaurant, $Price, $Gender, $RestaurantBranch, $Date);
    }
}