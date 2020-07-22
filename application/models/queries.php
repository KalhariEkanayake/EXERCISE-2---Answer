<?php
    class queries extends CI_Model {

        public function getBankBranches(){
            $query = $this->db->get('tbl_bank_branches');
            if($query->num_rows() > 0){
                return $query->result();
            }
        }

        public function addBranch($data){
            return $this->db->insert('tbl_bank_branches', $data);
        }

        public function getSingleBankBranch($bank_branch_id){
            $query = $this->db->get_where('tbl_bank_branches', array('bank_branch_id' => $bank_branch_id));
            if($query->num_rows() > 0){
                return $query->row();
            }
        }

        public function updateBranch($data, $bank_branch_id){
            return $this->db->where('bank_branch_id', $bank_branch_id)
            ->update('tbl_bank_branches', $data);
        }

        public function deleteBranch($bank_branch_id){
            return $this->db->delete('tbl_bank_branches', ['bank_branch_id'=>$bank_branch_id]);
        }
    }
?>