<?php
// Čitanje sadržaja datoteke
$studentsJson = file_get_contents(__DIR__ . '/polaznici.json');
// Prebacivanje u niz
$students = json_decode($studentsJson, true);
?>

<!-- Ispis podataka u tablicu -->
<table border="1" cellpadding="10">
    <tr>
        <th>Ime</th> 
        <th>Prezime</th> 
        <th>Godine</th> 
        <th>Email</th> 
        <th>Telefon</th> 
    </tr>
    <?php
        foreach($students as $student){
            echo '<tr>';
            echo '<td>'. $student['name'] .'</td>';
            echo '<td>'. $student['surname'] .'</td>';
            echo '<td>'. $student['age'] .'</td>';
            echo '<td>'. $student['email'] .'</td>';
            echo '<td>'. $student['phone'] .'</td>';
            echo '</tr>';
        }
    ?>
</table>

<?php
// Dodavanje novog polaznika
$students[] = [
    "name" => "Iva",        
    "surname" => "Vukorepa",        
    "age" => 48,        
    "email" => "iva.vukorepa",        
    "phone" => 38597666777
];
// Transformiranje u JSON
$studentsJson = json_encode($students);
// Zapisivanje novih podataka u datoteku
file_put_contents(__DIR__ . '/polaznici.json', $studentsJson); 

// Čitanje sadržaja datoteke
$studentsJson = file_get_contents(__DIR__ . '/polaznici.json');
// Prebacivanje u niz
$students = json_decode($studentsJson, true);
?>

<!-- Ispis podataka u tablicu -->
<table border="1" cellpadding="10">
    <tr>
        <th>Ime</th> 
        <th>Prezime</th> 
        <th>Godine</th> 
        <th>Email</th> 
        <th>Telefon</th> 
    </tr>
    <?php
        foreach($students as $student){
            echo '<tr>';
            echo '<td>'. $student['name'] .'</td>';
            echo '<td>'. $student['surname'] .'</td>';
            echo '<td>'. $student['age'] .'</td>';
            echo '<td>'. $student['email'] .'</td>';
            echo '<td>'. $student['phone'] .'</td>';
            echo '</tr>';
        }
    ?>
</table>