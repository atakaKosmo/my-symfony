<?php

namespace Paes\ComuneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comune
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Comune
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="descrizione", type="text")
     */
    private $descrizione;

    /**
     * @var integer
     *
     * @ORM\Column(name="superfcie", type="integer")
     */
    private $superfcie;

    /**
     * @var integer
     *
     * @ORM\Column(name="abitanti", type="integer")
     */
    private $abitanti;

    /**
     * @var string
     *
     * @ORM\Column(name="latitudine", type="decimal")
     */
    private $latitudine;

    /**
     * @var string
     *
     * @ORM\Column(name="longitudine", type="decimal")
     */
    private $longitudine;


    /**
     * @ORM\OneToMany(targetEntity="Paes\UserBundle\Entity\User", mappedBy="Comune")
     **/

    private $users;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     * @return Comune
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descrizione
     *
     * @param string $descrizione
     * @return Comune
     */
    public function setDescrizione($descrizione)
    {
        $this->descrizione = $descrizione;

        return $this;
    }

    /**
     * Get descrizione
     *
     * @return string
     */
    public function getDescrizione()
    {
        return $this->descrizione;
    }

    /**
     * Set superfcie
     *
     * @param integer $superfcie
     * @return Comune
     */
    public function setSuperfcie($superfcie)
    {
        $this->superfcie = $superfcie;

        return $this;
    }

    /**
     * Get superfcie
     *
     * @return integer
     */
    public function getSuperfcie()
    {
        return $this->superfcie;
    }

    /**
     * Set abitanti
     *
     * @param integer $abitanti
     * @return Comune
     */
    public function setAbitanti($abitanti)
    {
        $this->abitanti = $abitanti;

        return $this;
    }

    /**
     * Get abitanti
     *
     * @return integer
     */
    public function getAbitanti()
    {
        return $this->abitanti;
    }

    /**
     * Set latitudine
     *
     * @param string $latitudine
     * @return Comune
     */
    public function setLatitudine($latitudine)
    {
        $this->latitudine = $latitudine;

        return $this;
    }

    /**
     * Get latitudine
     *
     * @return string
     */
    public function getLatitudine()
    {
        return $this->latitudine;
    }

    /**
     * Set longitudine
     *
     * @param string $longitudine
     * @return Comune
     */
    public function setLongitudine($longitudine)
    {
        $this->longitudine = $longitudine;

        return $this;
    }

    /**
     * Get longitudine
     *
     * @return string
     */
    public function getLongitudine()
    {
        return $this->longitudine;
    }
}
