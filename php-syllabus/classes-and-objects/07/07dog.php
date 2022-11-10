<?php

class  Dog
{
    private string $name;
    private string $gender;

    public const MALE="male";
    public const FEMALE="female";

    private  ?Dog $mother;
    private  ?Dog $father;

    public function __construct(string $name, string $gender,
                                            ?Dog $mother= null,
                                            ?Dog $father= null
                                )
    {
        $this->name = $name;
        $this->gender= $gender;
        $this->mother= $mother;
        $this->father= $father;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @return Dog|null
     */
    public function getFather(): ?Dog
    {
        return $this->father;
    }

    /**
     * @return Dog|null
     */
    public function getMother(): ?Dog
    {
        return $this->mother;
    }

    public function SameMotherAs(Dog $dog):bool
    {
        if ($dog->getMother()->getName() || $this->SameMother()->getName()){

            return false;
        }

        return $dog->getMother()->getName() === $this->getMother()->getName();
    }

}