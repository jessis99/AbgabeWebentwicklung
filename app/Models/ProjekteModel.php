<?php

namespace App\Models;

use CodeIgniter\Model;

class ProjekteModel extends Model
{
    public function getProjekte($projekte_id = NULL){
        $this->projekte = $this->db->table('projekte');
        $this->projekte->select('*');

        IF ($projekte_id != NULL)
            $this->projekte->where('projekte.id', $projekte_id);

        $this->projekte->orderBy('name');
        $result = $this->projekte->get();

        if ($projekte_id != NULL)
            return $result->getRowArray();
        else
            return $result->getResultArray();
    }

    public function createProjekt() {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->insert(array('name' => $_POST['projektname'],
            'beschreibung' => $_POST['projektbeschreibung'],
            'ersteller' => $_SESSION['id']
        ));
    }

    public function updateProjekt() {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('projekte.id', $_POST['projekt']);
        $this->projekte->update(array('name' => $_POST['projektname'],
            'beschreibung' => $_POST['projektbeschreibung']));
    }

    public function deleteProjekt($projektauswahl) {
        $this->projekte = $this->db->table('projekte');
        $this->projekte->where('projekte.id', $projektauswahl);
        $this->projekte->delete();
    }

    public function isErsteller($personenId){
        $this->projekte=$this->db->table('projekte');
        $this->projekte->select('ersteller');
        $this->projekte->where('ersteller', $personenId);
        $result = $this->projekte->get();
        return $result->getResultArray();
    }

}