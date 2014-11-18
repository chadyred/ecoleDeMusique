<?php

namespace EcoleDeMusique\WelcomeBundle\Entity;


class SommeTarification {
    
    public function couperFormule($formule)
    {
            $i=0;

            //tant que me caractère n'est un symbole
            while(substr($formule,$i,1)!="+" && substr($formule,$i,1)!="*" && substr($formule,$i,1)!="t" && $i!=strlen($formule)){ $i++;}

            //si on a arctan
            if(substr($formule,$i,1)=="t")
            {
                    $j=$i;
                    while(substr($formule,$j,1)!=')' && $j!=strlen($formule)){$j++;}

                    // si on a pas une parenthese
                    if($j==strlen($formule) && substr($formule,$j,1)!=')')
                    {
                            die("Pas de parenthese fermante");
                    }
                    else
                    {
                            $resultat[0]="t";
                            $resultat[1]=substr($formule,$i+2,$j-($i+2));

                            if(substr($formule,$j+1,1)=="+" || substr($formule,$j+1,1)=="*"){$symbole=substr($formule,$j+1,1);}else{$symbole="";}
                            $resultat[2]=$symbole;
                            $resultat[3]=substr($formule,$j+2,strlen($formule));
                            return $resultat;
                    }


            }
            else//si on a pas de parenthese ouvrante
            {

                    //on récupère la 1er variable de la formule
                    $variable1=substr($formule,0,$i);

                    //si y'a un symbole on le range 
                    if(substr($formule,$i,1)=="+" || substr($formule,$i,1)=="*"){$symbole=substr($formule,$i,1);}else{$symbole="";}

                    $resultat[0]="";
                    $resultat[1]=$variable1;
                    $resultat[2]=$symbole;
                    $resultat[3]=substr($formule,$i+1,strlen($formule));

                    return $resultat;
            }
    }



public function donnerValeur($formule,$param1=0,$param2=0,$param3=0,$param4=0,$param5=0,$qf=0)
	{

/*            echo atan(2.7717);
                die;*/
		$resultatDecoup=$this->couperFormule($formule);

		//si on fait un arctangente
		if($resultatDecoup[0]=='t')
		{
			if($resultatDecoup[2]=='+')
			{
				$resultatValeur=atan($this->donnerValeur($resultatDecoup[1],$param1,$param2,$param3))+$this->donnerValeur($resultatDecoup[3],$param1,$param2,$param3,$param4,$param5,$qf);
			}
			
			if($resultatDecoup[2]=='*')
			{
				$resultatValeur=atan($this->donnerValeur($resultatDecoup[1],$param1,$param2,$param3))*$this->donnerValeur($resultatDecoup[3],$param1,$param2,$param3,$param4,$param5,$qf);
			}

			if($resultatDecoup[2]=='')
			{
				$resultatValeur=atan($this->donnerValeur($resultatDecoup[1],$param1,$param2,$param3,$param4,$param5,$qf));
			}
		
		}
		else
		{
				if($resultatDecoup[2]=='+')
				{
					$resultatValeur = ${$resultatDecoup[1]}+$this->donnerValeur($resultatDecoup[3],$param1,$param2,$param3,$param4,$param5,$qf);
				}

				if($resultatDecoup[2]=='*')
				{
					$resultatValeur = ${$resultatDecoup[1]}*$this->donnerValeur($resultatDecoup[3],$param1,$param2,$param3,$param4,$param5,$qf);
				}


				if($resultatDecoup[2]=='')
				{
					$resultatValeur = ${$resultatDecoup[1]};
				}
	
		}
		

		return $resultatValeur;
	}
    
    

    
    
     public function calculFormuleBase($doctrineObject,$qf,$capv)
     {
          //On applique la formule de base 
         
         
           $formule=$doctrineObject->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);
         
            $param1=$formule->getparam1();
            $param2=$formule->getparam2();
            $param3=$formule->getparam3();
            $param4=$formule->getparam4();
            $param5=$formule->getparam5();
             
           
            $formuleEcrite=$formule->getFormule();
            /*DonnerValeur donne la valeur du calcul de la formule au format enregistrer dans la bdd
            */
            
            
            if($capv=="oui")
            {
                if($qf!=null)
                {
                    $somme=$this->donnerValeur($formuleEcrite,$param1,$param2,$param3,$param4,$param5,$qf);
                }
                else
                {
                    echo "Pas possible d'appliquer un tarif EN CAPV avec une personne dont la famille n'a pas de QF<br /> Faites Retour sur votre navigateur";die;
                }
            }
            else 
            {
                $somme=$formule->getTarifMax();
                
            }
          // $somme=$param1+$param2+$param3+$param4+$param5;

            
            return $somme;

     }
     
     
     
        public function calculMajorationCycle($cycle,$somme,$doctrineObject)
        {
            
            $formule=$doctrineObject->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);
       
            
                            //On applique le coefficient de cyle à la formule de base
                                 if($cycle=="eveil musical")
                                {
                                    $somme=$somme*$formule->getCoefcyle0();
                                }
                                else
                                {
                                        if($cycle=="cycle 1")
                                        {
                                             $somme=$somme*$formule->getCoefcyle1();
                                        }
                                        else
                                        {
                                                if($cycle=="cycle 2")
                                                 { 
                                                    $somme=$somme*$formule->getCoefcyle2();
                                                 }
                                                 else
                                                 {
                                                         if($cycle=="cycle 3")
                                                         {
                                                             $somme=$somme*$formule->getCoefcyle3();
                                                         }
                                                 }
                                        }
                                }
            
                                
                    return $somme;
        }
        
        
        
          public function calculMajorationCapv($capv,$somme,$doctrineObject)
          {
              
              $formule=$doctrineObject->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);
              
            if($capv=="non")
            {
                    $somme=$somme*$formule->getCoefCapv();
            }
            

            return $somme;
          }
          
          
           public function calculMajorationInstru2($intru2,$somme,$doctrineObject,$qf,$Adulte,$capv)
          {
                                                  
                          $formule=$doctrineObject->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);
                          
                         
                  
                         if($intru2=="intru2cycle1")                     
                         {
                                $somme=$somme+($this->calculMultiplicateurAdulte($Adulte, $this->calculMajorationCycle("cycle 1",$this->calculFormuleBase($doctrineObject,$qf,$capv),$doctrineObject), $doctrineObject)*$formule->getCoefInstru2()); 
                         }
                         else
                         {
                               if($intru2=="intru2cycle2")                     
                               {
                                   $somme=$somme+($this->calculMultiplicateurAdulte($Adulte,$this->calculMajorationCycle("cycle 2",$this->calculFormuleBase($doctrineObject,$qf,$capv),$doctrineObject),$doctrineObject)*$formule->getCoefInstru2());
                               }  
                               else
                               {
                                    if($intru2=="intru2cycle3")                     
                                    {
                                         $somme=$somme+($this->calculMultiplicateurAdulte($Adulte,$this->calculMajorationCycle("cycle 3",$this->calculFormuleBase($doctrineObject,$qf,$capv),$doctrineObject),$doctrineObject)*$formule->getCoefInstru2());
                                    } 
                               }
                         }

                         
                         
                         return $somme;
          }
          
          public function calculMajorationInstru3($intru3,$somme,$doctrineObject,$qf,$Adulte,$capv)
          {

                 $formule=$doctrineObject->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);
                 
                         if($intru3=="intru3cycle1")                     
                         {
                                $somme=$somme+($this->calculMultiplicateurAdulte($Adulte,$this->calculMajorationCycle("cycle 1",$this->calculFormuleBase($doctrineObject,$qf,$capv),$doctrineObject),$doctrineObject)*$formule->getCoefInstru3());
                         }
                         else
                         {
                               if($intru3=="intru3cycle2")                     
                               {
                                   $somme=$somme+($this->calculMultiplicateurAdulte($Adulte,$this->calculMajorationCycle("cycle 2",$this->calculFormuleBase($doctrineObject,$qf,$capv),$doctrineObject),$doctrineObject)*$formule->getCoefInstru3());
                               }  
                               else
                               {
                                    if($intru3=="intru3cycle3")                     
                                    {
                                        $somme=$somme+($this->calculMultiplicateurAdulte($Adulte,$this->calculMajorationCycle("cycle 3",$this->calculFormuleBase($doctrineObject,$qf,$capv),$doctrineObject),$doctrineObject)*$formule->getCoefInstru3());


                                    } 
                               }
                         }
                         
                      
                     
                      return $somme;
          }
          
         public function calculReductionFamille($idEleve,$somme,$doctrineObject)
          { 
             //Recupération Nombre de gens dans la famille
             
       /*******************************************************************************************************************/      
             
                $FE=$doctrineObject->getEntityManager()
                   ->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:Eleve e where e.id='.$idEleve)
                   ->getResult();
                  foreach($FE as $FamElev){$idFamille=$FamElev->getFamille()->getId();}

                  $CountMembre=$doctrineObject->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')
                          ->findByFamille($idFamille);


         /**************************************************************************************************************************/     
              //Récup quota de réduction
               $formule=$doctrineObject->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);
               $reducDeuxEleve=$formule->getCoef2eleves();
               $reducTroisEleve=$formule->getCoef3eleves();
               $reducQuatreEleve=$formule->getCoef4eleves();
               $reducCinqEleve=$formule->getCoef5eleves();
   
         
               $CountMembre=count($CountMembre);
        

             //On applique la réduction en fonction du nombre de personnes de la meme famille inscrite à l'école de zik
              if($CountMembre==2)
              {
                   $somme=$somme*(1-$reducDeuxEleve);
                   $reductionApplique=$reducDeuxEleve;
              }
             else 
             {
                    if($CountMembre==3)
                    {
                            $somme=$somme*(1-$reducTroisEleve);
                            $reductionApplique=$reducTroisEleve;
                    }
                    else 
                    {
                            if($CountMembre==4)
                            {
                                  $somme=$somme*(1-$reducQuatreEleve);
                                   $reductionApplique=$reducQuatreEleve;
                            }
                            else 
                            {
                                if($CountMembre>=5)
                                 {
                                        $somme=$somme*(1-$reducCinqEleve);
                                        $reductionApplique=$reducCinqEleve;
                                 }       
                            }
                    }
             }
                  
             
             
           
            //Application de la même réduction aux autres membres de la famille si ce n'est pas déjà le cas
                /*Recherche des elèves de la meme famille pour appliquer la réduction à tout le monde*/
                /*recup de l'id eleve*/

               
                /*On recherche des les autres membres de la famille dans la table eleve*/
                 $AutreMembreDeLaFamille =$doctrineObject->getEntityManager()
                ->createQuery('SELECT e FROM EcoleDeMusiqueWelcomeBundle:Eleve e where e.famille='.$idFamille.'AND e.id!='.$idEleve)
               ->getResult();
                $i=0;
               foreach($AutreMembreDeLaFamille as $amdlf){$membre[$i]=$amdlf->getid();$i++;}


                
                for($y=0;$y<$i;$y++)
                {
                    
                        $em = $doctrineObject->getEntityManager();
                        $EleveMiseAJour = $em->getRepository('EcoleDeMusiqueWelcomeBundle:Eleve')->find($membre[$y]);
                        //Si on trouve pas 
                        if (!$EleveMiseAJour) {throw $this->createNotFoundException("Pas de Formule à l'id :".$y);}

                         //Si il y a déjà des informatiosn en régie dont qu'une tarif a bien été faite 
                          if($EleveMiseAJour->getRegie())
                          {

                            //  echo $EleveMiseAJour->getRegie()->getSommeSansRemise()*(1-$reductionApplique);
                                $EleveMiseAJour->getRegie()->setSommeAvecRemise($EleveMiseAJour->getRegie()->getSommeSansRemise()*(1-$reductionApplique));
                                $EleveMiseAJour->getRegie()->setRemise($EleveMiseAJour->getRegie()->getsommesansremise()-$EleveMiseAJour->getRegie()->getSommeAvecRemise());
                                $em->flush();
                          }
                 }
             /*-----------------------------------------------------------------------------------------------------------------*/
             
             return $somme;

         }

         
           public function calculMultiplicateurAdulte($Adulte,$somme,$doctrineObject)
          { 
               $formule=$doctrineObject->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);
               if($Adulte=="adulte")
               {    
                   $somme=$somme*$formule->getmultiplicateurAdulte();   
               }
               
               return $somme;
          
          }
          public function calculTarifMaxEnCapv($somme,$doctrineObject,$capv)
          {   
                if($capv=="oui")
                {

                        $formule=$doctrineObject->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);


                       if($formule->gettarifMaxCapv()<$somme)
                       {
                           $somme=$formule->gettarifMaxCapv();
                       }
                }
                
                return $somme;
          }
         
          public function calculTarifMaxHorsCapv($somme,$doctrineObject,$capv)
          {   
            
               if($capv=="non")
               {
                    $formule=$doctrineObject->getRepository("EcoleDeMusiqueWelcomeBundle:Formule")->find(1);

                    if($formule->gettarifMaxHorsCapv()<$somme)
                    {
                        $somme=$formule->gettarifMaxHorsCapv();
                    }
               }

              return $somme;
              
          }
       
}

?>
