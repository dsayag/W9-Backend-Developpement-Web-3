<?php

class Warrior extends Character
{
    // Méthodes
    public function turn($target) {
        return $this->attack($target);
    }

    public function attack($target) {
        $target->setHealthPoints($this->damage);
        $target->isAlive();
        $status = "$this->name donne un coup d'épée à $target->name ! <strong>Il reste $target->healthPoints points de vie à $target->name !</strong>";
        return $status;
    }
}
