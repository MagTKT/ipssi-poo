<?php

require_once('vendor/autoload.php');

$climate = new League\CLImate\CLImate;

class Diviseur {
    public function division(int $index, int $diviseur)
    {
        $valeurs = [17, 12, 15, 38, 29, 157, 89, -22, 0, 5];

        if($index >= count($valeurs))
        {
        	throw new sizeTabException("L'indice n'existe pas");
        }
        if($diviseur === 0)
        {
        	throw new DivisionByZeroError("Merci de ne pas diviser par 0");
        }
        return $valeurs[$index] / $diviseur;
    }
}

do{

	$input = $climate->input("Entrez l’indice de l’entier à diviser : ");
	$index = $input->prompt();

	$input = $climate->input("Entrez le diviseur : ");
	$diviseur = $input->prompt();

	try{
		$test = (new Diviseur())->division($index, $diviseur);
		$climate->output("Le résultat de la division est : " . $test);
	}catch (sizeTabException $e){
	    echo $e->getMessage() . PHP_EOL;
	}catch (\DivisionByZeroError $e){
		echo $e->getMessage() . PHP_EOL;
	}catch (\TypeError $e){
	    echo "Entrer un nombre entier" . PHP_EOL;
	}catch (\Throwable $e){
	    echo "Erreur" .$e->getMessage();
	}
}while(isset($test)===false);

class ExoException extends \Exception {
	
}

class TailleTableauException extends ExoException {
	
}
