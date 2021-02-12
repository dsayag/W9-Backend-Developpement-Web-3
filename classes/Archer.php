<?php

class Archer extends Character
{
    // Attribut
    public $arrow = 4;
    
    // Méthodes
    /*public function turn($target) {        
        return $this->arrow($target);
    }*/

    public function turn($target) {
        $rand = rand(1, 10);
        if ($this->arrow = 0) {
            return $this->dagger($targer);
        } else if ($rand > 8 || $this->arrow !==0) {
            return $this->arrowMaster($target);
        } else if ($rand <= 8) {
            return $this->arrow($target);
        }
        return $status;
    }

    public function arrow($target) {
        $rand = rand(15, 30)/10;
        $damageNew = $this->damage + ($this->damage * $rand);
        $this->damage = $damageNew;
        $target->setHealthPoints($this->damage);
        $target->isAlive();
        $status = "$this->name lance une flèche à $target->name ! <strong>Il reste $target->healthPoints points de vie à $target->name !</strong>";
        return $status;
    }

    public function arrowMaster($target) {
        $rand = rand(15, 30)/10 * 2;
        $damageNew = $this->damage + ($this->damage * $rand);
        $this->damage = $damageNew;
        $target->setHealthPoints($this->damage);
        $target->isAlive();
        $status = "$this->name lance une flèche à $target->name ! <strong>Il reste $target->healthPoints points de vie à $target->name !</strong>";
        return $status;
    }
    
}