<?php
include_once '../components/header.php';
?>
<div class="container-fluid">
    <?php include_once '../components/navbar.php'; ?>
    <form method="POST">
        <div class="mb-3">
            <label for="inputName" class="form-label">Primeiro Nome :</label>
            <input required type="text" name="firstname" class="form-control" id="inputName" aria-describedby="nameHelp">
            <div id="nameHelp" class="form-text">Ex.: Ryan </div>
        </div>
        <div class="mb-3">
            <label for="inputLastName" class="form-label">Ultimo Nome :</label>
            <input required type="text" name="lastname" class="form-control" id="inputLastName" aria-describedby="lastNameHelp">
            <div id="lastNameHelp" class="form-text">Ex.: Gualberto</div>
        </div>
        <div class="mb-3">
            <label for="inputLastName" class="form-label">Data de Nascimento :</label>
            <input required type="date" name="data" class="form-control" id="inputLastName" aria-describedby="lastNameHelp">
            <div id="lastNameHelp" class="form-text">Ex.: 00/00/0000</div>
        </div>
        <div class="mb-3">
            <label for="inputCPF" class="form-label">CPF :</label>
            <input required type="number" name="cpf" class="form-control" id="inputCPF" aria-describedby="cpfHelp">
            <div id="cpfHelp" class="form-text">Ex.: 111.111.111-11</div>
        </div>
        <div class="mb-3">
            <label for="inputRg" class="form-label">RG :</label>
            <input required type="number" name="rg" class="form-control" id="inputRg" aria-describedby="rgHelp">
            <div id="rgHelp" class="form-text">Ex.: 11.111.111-1</div>
        </div>
        <div class="mb-3">
            <label for="inputCep" class="form-label">CEP :</label>
            <input required type="number" name="cep" class="form-control" id="inputCep" aria-describedby="cepHelp">
            <div id="cepHelp" class="form-text">Ex.: 11718-350</div>
        </div>
        <div class="mb-3">
            <label for="inputNrEnd" class="form-label">Numero :</label>
            <input required type="number" name="endereco" class="form-control" id="inputNrEnd" aria-describedby="nrEndHelp">
            <div id="nrEndHelp" class="form-text">Ex.: 170 </div>
        </div>
        <select class="form-select form-select-sm mb-3" name="country" aria-label=".form-select-sm example">
            <option value="" selected="selected">Selecione um país</option>
            <option value="United States">United States</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="Afghanistan">Afghanistan</option>
            <option value="Albania">Albania</option>
            <option value="Algeria">Algeria</option>
            <option value="American Samoa">American Samoa</option>
            <option value="Andorra">Andorra</option>
            <option value="Angola">Angola</option>
            <option value="Anguilla">Anguilla</option>
            <option value="Antarctica">Antarctica</option>
            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option value="AnmEmpresaentina">Argentina</option>
            <option value="Armenia">Armenia</option>
            <option value="Aruba">Aruba</option>
            <option value="Australia">Australia</option>
            <option value="Austria">Austria</option>
            <option value="Azerbaijan">Azerbaijan</option>
            <option value="Bahamas">Bahamas</option>
            <option value="Bahrain">Bahrain</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Barbados">Barbados</option>
            <option value="Belarus">Belarus</option>
            <option value="Belgium">Belgium</option>
            <option value="Belize">Belize</option>
            <option value="Benin">Benin</option>
            <option value="Bermuda">Bermuda</option>
            <option value="Bhutan">Bhutan</option>
            <option value="Bolivia">Bolivia</option>
            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option value="Botswana">Botswana</option>
            <option value="Bouvet Island">Bouvet Island</option>
            <option value="Brazil">Brasil</option>
            <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
            <option value="Brunei Darussalam">Brunei Darussalam</option>
            <option value="Bulgaria">Bulgaria</option>
            <option value="Burkina Faso">Burkina Faso</option>
            <option value="Burundi">Burundi</option>
            <option value="Cambodia">Cambodia</option>
            <option value="Cameroon">Cameroon</option>
            <option value="Canada">Canada</option>
            <option value="Cape Verde">Cape Verde</option>
            <option value="Cayman Islands">Cayman Islands</option>
            <option value="Central African Republic">Central African Republic</option>
            <option value="Chad">Chad</option>
            <option value="Chile">Chile</option>
            <option value="China">China</option>
            <option value="Christmas Island">Christmas Island</option>
            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
            <option value="Colombia">Colombia</option>
            <option value="Comoros">Comoros</option>
            <option value="Congo">Congo</option>
            <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
            <option value="Cook Islands">Cook Islands</option>
            <option value="Costa Rica">Costa Rica</option>
            <option value="Cote D'ivoire">Cote D'ivoire</option>
            <option value="Croatia">Croatia</option>
            <option value="Cuba">Cuba</option>
            <option value="Cyprus">Cyprus</option>
            <option value="Czech Republic">Czech Republic</option>
            <option value="Denmark">Denmark</option>
            <option value="Djibouti">Djibouti</option>
            <option value="Dominica">Dominica</option>
            <option value="Dominican Republic">Dominican Republic</option>
            <option value="Ecuador">Ecuador</option>
            <option value="Egypt">Egypt</option>
            <option value="El Salvador">El Salvador</option>
            <option value="Equatorial Guinea">Equatorial Guinea</option>
            <option value="Eritrea">Eritrea</option>
            <option value="Estonia">Estonia</option>
            <option value="Ethiopia">Ethiopia</option>
            <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
            <option value="Faroe Islands">Faroe Islands</option>
            <option value="Fiji">Fiji</option>
            <option value="Finland">Finland</option>
            <option value="France">France</option>
            <option value="French Guiana">French Guiana</option>
            <option value="French Polynesia">French Polynesia</option>
            <option value="French Southern Territories">French Southern Territories</option>
            <option value="Gabon">Gabon</option>
            <option value="Gambia">Gambia</option>
            <option value="Georgia">Georgia</option>
            <option value="Germany">Germany</option>
            <option value="Ghana">Ghana</option>
            <option value="Gibraltar">Gibraltar</option>
            <option value="Greece">Greece</option>
            <option value="Greenland">Greenland</option>
            <option value="Grenada">Grenada</option>
            <option value="Guadeloupe">Guadeloupe</option>
            <option value="Guam">Guam</option>
            <option value="Guatemala">Guatemala</option>
            <option value="Guinea">Guinea</option>
            <option value="Guinea-bissau">Guinea-bissau</option>
            <option value="Guyana">Guyana</option>
            <option value="Haiti">Haiti</option>
            <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
            <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
            <option value="Honduras">Honduras</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Hungary">Hungary</option>
            <option value="Iceland">Iceland</option>
            <option value="India">India</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
            <option value="Iraq">Iraq</option>
            <option value="Ireland">Ireland</option>
            <option value="Israel">Israel</option>
            <option value="Italy">Italy</option>
            <option value="Jamaica">Jamaica</option>
            <option value="Japan">Japan</option>
            <option value="Jordan">Jordan</option>
            <option value="Kazakhstan">Kazakhstan</option>
            <option value="Kenya">Kenya</option>
            <option value="Kiribati">Kiribati</option>
            <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
            <option value="Korea, Republic of">Korea, Republic of</option>
            <option value="Kuwait">Kuwait</option>
            <option value="Kyrgyzstan">Kyrgyzstan</option>
            <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
            <option value="Latvia">Latvia</option>
            <option value="Lebanon">Lebanon</option>
            <option value="Lesotho">Lesotho</option>
            <option value="Liberia">Liberia</option>
            <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
            <option value="Liechtenstein">Liechtenstein</option>
            <option value="Lithuania">Lithuania</option>
            <option value="Luxembourg">Luxembourg</option>
            <option value="Macao">Macao</option>
            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
            <option value="Madagascar">Madagascar</option>
            <option value="Malawi">Malawi</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Maldives">Maldives</option>
            <option value="Mali">Mali</option>
            <option value="Malta">Malta</option>
            <option value="Marshall Islands">Marshall Islands</option>
            <option value="Martinique">Martinique</option>
            <option value="Mauritania">Mauritania</option>
            <option value="Mauritius">Mauritius</option>
            <option value="Mayotte">Mayotte</option>
            <option value="Mexico">Mexico</option>
            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
            <option value="Moldova, Republic of">Moldova, Republic of</option>
            <option value="Monaco">Monaco</option>
            <option value="Mongolia">Mongolia</option>
            <option value="Montserrat">Montserrat</option>
            <option value="Morocco">Morocco</option>
            <option value="Mozambique">Mozambique</option>
            <option value="Myanmar">Myanmar</option>
            <option value="Namibia">Namibia</option>
            <option value="Nauru">Nauru</option>
            <option value="Nepal">Nepal</option>
            <option value="Netherlands">Netherlands</option>
            <option value="Netherlands Antilles">Netherlands Antilles</option>
            <option value="New Caledonia">New Caledonia</option>
            <option value="New Zealand">New Zealand</option>
            <option value="Nicaragua">Nicaragua</option>
            <option value="Niger">Niger</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Niue">Niue</option>
            <option value="Norfolk Island">Norfolk Island</option>
            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
            <option value="Norway">Norway</option>
            <option value="Oman">Oman</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Palau">Palau</option>
            <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
            <option value="Panama">Panama</option>
            <option value="Papua New Guinea">Papua New Guinea</option>
            <option value="Paraguay">Paraguay</option>
            <option value="Peru">Peru</option>
            <option value="Philippines">Philippines</option>
            <option value="Pitcairn">Pitcairn</option>
            <option value="Poland">Poland</option>
            <option value="Portugal">Portugal</option>
            <option value="Puerto Rico">Puerto Rico</option>
            <option value="Qatar">Qatar</option>
            <option value="Reunion">Reunion</option>
            <option value="Romania">Romania</option>
            <option value="Russian Federation">Russian Federation</option>
            <option value="Rwanda">Rwanda</option>
            <option value="Saint Helena">Saint Helena</option>
            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option value="Saint Lucia">Saint Lucia</option>
            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
            <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
            <option value="Samoa">Samoa</option>
            <option value="San Marino">San Marino</option>
            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option value="Saudi Arabia">Saudi Arabia</option>
            <option value="Senegal">Senegal</option>
            <option value="Serbia and Montenegro">Serbia and Montenegro</option>
            <option value="Seychelles">Seychelles</option>
            <option value="Sierra Leone">Sierra Leone</option>
            <option value="Singapore">Singapore</option>
            <option value="Slovakia">Slovakia</option>
            <option value="Slovenia">Slovenia</option>
            <option value="Solomon Islands">Solomon Islands</option>
            <option value="Somalia">Somalia</option>
            <option value="South Africa">South Africa</option>
            <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
            <option value="Spain">Spain</option>
            <option value="Sri Lanka">Sri Lanka</option>
            <option value="Sudan">Sudan</option>
            <option value="Suriname">Suriname</option>
            <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
            <option value="Swaziland">Swaziland</option>
            <option value="Sweden">Sweden</option>
            <option value="Switzerland">Switzerland</option>
            <option value="Syrian Arab Republic">Syrian Arab Republic</option>
            <option value="Taiwan, Province of China">Taiwan, Province of China</option>
            <option value="Tajikistan">Tajikistan</option>
            <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
            <option value="Thailand">Thailand</option>
            <option value="Timor-leste">Timor-leste</option>
            <option value="Togo">Togo</option>
            <option value="Tokelau">Tokelau</option>
            <option value="Tonga">Tonga</option>
            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option value="Tunisia">Tunisia</option>
            <option value="Turkey">Turkey</option>
            <option value="Turkmenistan">Turkmenistan</option>
            <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
            <option value="Tuvalu">Tuvalu</option>
            <option value="Uganda">Uganda</option>
            <option value="Ukraine">Ukraine</option>
            <option value="United Arab Emirates">United Arab Emirates</option>
            <option value="United Kingdom">United Kingdom</option>
            <option value="United States">United States</option>
            <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
            <option value="Uruguay">Uruguay</option>
            <option value="Uzbekistan">Uzbekistan</option>
            <option value="Vanuatu">Vanuatu</option>
            <option value="Venezuela">Venezuela</option>
            <option value="Viet Nam">Viet Nam</option>
            <option value="Virgin Islands, British">Virgin Islands, British</option>
            <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
            <option value="Wallis and Futuna">Wallis and Futuna</option>
            <option value="Western Sahara">Western Sahara</option>
            <option value="Yemen">Yemen</option>
            <option value="Zambia">Zambia</option>
            <option value="Zimbabwe">Zimbabwe</option>
        </select>
        <div class="mb-3">
            <label for="inputTel" class="form-label">Telefone :</label>
            <input required type="number" name="tel" class="form-control" id="inputTel" aria-describedby="telHelp">
            <div id="telHelp" class="form-text">Ex.: 11 11111-1111 </div>
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">Email :</label>
            <input required type="text" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Ex.: teste@teste.com </div>
        </div>

        <select class="form-select form-select-sm mb-3" name="gender" aria-label=".form-select-sm example">
            <option selected>Gênero</option>
            <option value="1">Feminino</option>
            <option value="2">Masculino</option>
        </select>

        <button type="submit" class="btn btn-primary">cadastrar</button>
    </form>
</div>
<script src="https:/cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity></script>
</body>

</html>

<?php

try {


    if (!empty($_POST)) {
        include_once '../db/config.php';
        $primeironm = $_POST['firstname'];
        $sobrenome = $_POST['lastname'];
        $dataNasc = $_POST['data'];
        $cpf = $_POST['cpf'];
        $rg = $_POST['rg'];
        $cep = $_POST['cep'];
        $endereco = $_POST['endereco'];
        $pais = $_POST['country'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $genero = $_POST['gender'];

        try {
            $stmt = $conn->prepare("
            USE mySystem;
            INSERT INTO tb_funcionario (nm_primeiro, nm_sobrenome, dt_nasc, nr_cpf, nr_rg, nr_cep, nr_endereco, nm_pais, nr_celular, nm_email, id_genero)
            VALUES (:primeironm, :sobrenome, :dataNasc, :cpf, :rg, :cep, :endereco, :pais, :tel, :email, :genero)");

            $stmt->bindParam(':primeironm', $primeironm);
            $stmt->bindParam(':sobrenome', $sobrenome);
            $stmt->bindParam(':dataNasc', $dataNasc);
            $stmt->bindParam(':cpf', $cpf);
            $stmt->bindParam(':rg', $rg);
            $stmt->bindParam(':cep', $cep);
            $stmt->bindParam(':endereco', $endereco);
            $stmt->bindParam(':pais', $pais);
            $stmt->bindParam(':tel', $tel);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':genero', $genero);
            $stmt->execute();

            echo "<script>alert('Cadastrado com Sucesso');</script>";
        } catch (PDOException $e) {
            echo "Erro ao cadastrar: " . $e->getMessage();
        }
        $conn = null;
    }
} catch (PDOException $e) {
    echo "<script>alert('Erro/ ao cadastrar:' " . $e->getMessage() . ")</script>";
}

?>