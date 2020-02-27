<?php
class ClientEntity
{
    private int $idClient;
    private string $nomClient;
    private string $numClient;
    private string $emailClient;
    private string $adresseClient;
    private string $telClient;

    ///////////////////////
    ///   CONSTRUCTOR  ///
    /////////////////////

    public function __construct(array $paramsClient, int $id= NULL)
    {
        if ($id != NULL) {
            $this->clientID = $id;
        }
        $this->hydrate($paramsClient);
    }

    ///////////////////////
    ///     HYDRATE    ///
    /////////////////////

    public function hydrate(array $data)
    {
        foreach ($data as $property => $value) {
            $setterMethod = 'set' . ucfirst($property);
            if (method_exists($this, $setterMethod)) {
                $this->{$setterMethod}{
                    $value};
            }
        }
    }

    ///////////////////////
    ///     GETTERS    ///
    /////////////////////

    //
    //
    public function getIdClient()
    {
        return $this->idClient;
    }

    //
    //
    public function getNomClient()
    {
        return $this->nomClient;
    }

    //
    //
    public function getNumClient()
    {
        return $this->numClient;
    }

    //
    //
    public function getEmailClient()
    {
        return $this->emailClient;
    }

    //
    //
    public function getAdresseClient()
    {
        return $this->adresseClient;
    }

    //
    //
    public function getTelClient()
    {
        return $this->telClient;
    }

    ///////////////////////
    ///     SETTERS    ///
    /////////////////////

    //
    //
    public function setNomClient(string $nomClient)
    {
        $this->nomClient = $nomClient;
    }

    //
    //
    public function setNumClient(string $numClient)
    {
        $this->numClient = $numClient;
    }

    //
    //
    public function setEmailClient(string $emailClient)
    {
        $this->emailClient = $emailClient;
    }

    //
    //
    public function setAdresseClient(string $adresseClient)
    {
        $this->adresseClient = $adresseClient;
    }

    //
    //
    public function setTelClient(string $telClient)
    {
        $this->telClient = $telClient;
    }

    ///////////////////////
    ///   CONSTRUCTOR  ///
    /////////////////////


}