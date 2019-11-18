<?php

require_once('vendor/autoload.php');


$climate = new League\CLImate\CLImate;

class ArtWork{
	private $NameArtWork;
	private $QuantityArtWork;

	public function __construct(string $NameArtWork, int $QuantityArtWork){
		$this->NameArtWork = $NameArtWork;
		$this->QuantityArtWork = $QuantityArtWork;
	}

	public function BorrowerArtWork(){
		$nb_ArtWork_Avant_Emprunt = $this->QuantiteArtWork;
		$this->QuantiteArtWork = $nb_ArtWork_Avant_Emprunt-1;
	}

	public function RenderArtWork(){
		$nb_ArtWork_Event_Render = $this->QuantityArtWork;
		$this->QuantityArtWork = $nb_ArtWork_Event_Render+1;
	}

	public function getNameArtWork(): string{
		return $this->NameArtWork;
	}

	public function getQuantityArtWork(): int{
		return $this->QuantityArtWork;
	}
}
class Member{
	private $NameMember;
	private $listBorrower;

	public function __construct(string $NameMember, array $listBorrower){
		
		$this->NameMember = $NameMember;
		$this->ListeEmprunt = $listBorrower;
	}

	public function AddBorrower(Borrower $Borrower){
		array_push($this->ListeBorrower, $Borrower);
	}
	public function getNameMember(): string{
		return $this->NameMember;
	}

	public function getListBorrower(): array{
		return $this->ListeBorrower;
	}
}

class Borrower{
	private $listArtWork;
	private $dateBorrower;
	private $dateValidate;
	private $dateRender;

	public function __construct(
		array $listArtWork = array(),\DateTimeInterface $dateborrower,
\DateTimeInterface $dateValidate
		
	){
		$this->listArtWork = $listArtWork;
		$this->dateBorrower = $dateBorrower;
		$this->dateValidate = $dateValidate;
		$this->dateRender = $dateRender;
	}

	public function getListArtWork(): array{
		return $this->listArtWork;
	}

	public function getDateBorrower(): \DateTimeInterface{
		return $this->dateBorrower;
	}

	public function getValidate(): \DateTimeInterface{
		return $this->dateValidate;
	}

	public function getDate(){
		return $this->dateRender;
	}

	public function AddBorrower(artWork $artwork){
		array_push($this->listArtwork, $artwork);
	}
}

$ListArtWork1 = [
	new ArtWork("toto", 1),
	new ArtWork("manuel", 2)
];

$ListArtWork2 = [
	new ArtWork("essai", 3),
	new Artwork("a voir", 4)
];

$ListBorrower = [
	new Borrower($ListArtWork1, new \DateTime("2019-01-01"), new \DateTime("2019-00-01"), new \DateTime("2019-00-01")),
	new Borrower($ListArtWork2, new \DateTime("2019-00-01"), new \DateTime("2019-00-01"), new \DateTime("2019-00-01")),

];

$Member = new Member(
	"Name Test", 
	$ListBorrower);

var_dump($Member);
