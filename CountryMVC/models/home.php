<?php 

    class HomeModel extends Model {
        public function index() {
            $this->query('SELECT * FROM country_db');
            $rows = $this->resultSet();
            return $rows;
        }

        public function add() {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($_SERVER["REQUEST_METHOD"] == "POST") {
                // **************** FILE UPLOAD ***************
                $file_name = $_FILES["photo"]["name"];
                $file_type = $_FILES["photo"]["type"];
                $file_size = $_FILES["photo"]["size"];
                $file_tmp_name = $_FILES["photo"]["tmp_name"];
                $file_error = $_FILES["photo"]["error"];
                $uploaddir = 'uploads/';
                $stem=substr($file_name,0,strpos($file_name,'.'));
                $extension = substr($file_name, strpos($file_name,'.'), strlen($file_name)-1);
                $uploadfile = $uploaddir . $stem.$extension;
                // ***************************************************

                $this->query('INSERT INTO country_db(countryname, countrycode, 	capital, population, image) VALUES(:countryname, :countrycode, :capital, :population, :image)');
                $this->bind(':countryname', $post['countryname']);
                $this->bind(':countrycode', $post['countrycode']);
                $this->bind(':capital', $post['capital']);
                $this->bind(':population', $post['population']);
                $this->bind(':image', $file_name);

                move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);

                $this->execute();
                // VERIFY
                if($this->lastInsertId()) {
                    header('Location: '. ROOT_URL);
                }
            }
            return;
        }

        public function delete() {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $id = $_POST["delete_id"];
                $this->query('DELETE from country_db where id=:id');
                $this->bind(':id', $id);
                $this->execute();

                header('Location: '. ROOT_URL);
            }
            return;
        }

        public function update() {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($_SERVER["REQUEST_METHOD"] == "POST") {

                $this->query('UPDATE country_db SET countryname=:countryname, countrycode=:countrycode, capital=:capital, population=:population WHERE id=:id');
                $this->bind(':countryname', $post['edit_countryname']);
                $this->bind(':countrycode', $post['edit_countrycode']);
                $this->bind(':capital', $post['edit_capital']);
                $this->bind(':population', $post['edit_population']);
                $this->bind(':id', $post['update_id']);

                $this->execute();
                header('Location: '. ROOT_URL);
                // echo 'SUBMITTED';
            }
            return;
        }

    }

?>