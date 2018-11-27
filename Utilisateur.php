<?php
/**
 * Created by PhpStorm.
 * User: RIM
 * Date: 25/11/2018
 * Time: 12:47
 */
class Utilisateur
{

    private $cin;
    private $nom;
    private $prenom;
    private $age;

    /**
     * Utilisateur constructor.
     * @param $cin
     * @param $nom
     * @param $prenom
     * @param $age
     */
    /*public function __construct($cin, $nom, $prenom, $age)
    {
        $this->cin = $cin;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }*/

    /**
     * @return mixed
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * @param mixed $cin
     */
    public function setCin($cin)
    {
        $this->cin = $cin;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }



}