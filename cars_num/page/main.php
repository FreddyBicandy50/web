<?php
require('cars_num/partials/template.php');
?> 
<section class='flex flex-col antialiased bg-gray-100 text-gray-600 min-h-screen p-4'>
    <?php
    print("request:{$_POST['plate']}");
    if (!empty($_POST['plate'])) {
        require("cars_num/database/connection.php");
        $query = "SELECT * from cars_NB WHERE ActualNB='{$_POST['plate']}'";
        $result = $db->query($connection, $query);
        while ($info = mysqli_fetch_assoc($result)) {
            print("
    <div class='h-full'>
        <!-- Table -->
        <div align='left' class='w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200'>
            <header class='px-5 py-4 border-b border-gray-100'>
                <h2 class='font-semibold text-gray-800'>Results {$info['CodeDesc']}</h2>
            </header>
            <div class='p-3'>
                <div class='overflow-x-auto'>
                    <table class='table-auto w-full'>

                        <tbody class='text-m font-semibold  text-gray-600 '>

                            <tr class='p-2 uppercase whitespace-nowrap bg-gray-50'>
                                <th class='font-semibold text-left'>Plate Number:
                                <td>{$info['ActualNB']}</td>
                                </th>
                            </tr>
                            <tr class='p-2 uppercase whitespace-nowrap '>
                                <th class='font-semibold text-left'>Section:
                                <td>{$info['CodeDesc']}</td>
                                </th>
                            </tr>
                            <tr class='p-2 whitespace-nowrap bg-gray-50'>
                                <th class='font-semibold uppercase text-left'>Plate Type:
                                <td>{$info['UtilisDesc']}</td>
                                </th>
                            </tr>
                            <tr class='p-2  whitespace-nowrap '>
                                <th class='font-semibold uppercase text-left'>Car Spec:
                                <td>{$info['CouleurDesc']} | {$info['MarqueDesc']} {$info['TypeDesc']} (<i>{$info['PreMiseCirc']}</i>) </td>
                                </th>
                            </tr>
                            <tr class='p-2 whitespace-nowrap bg-gray-50'>
                                <th class='font-semibold uppercase text-left'>Full Name:
                                <td class='font-arial'>{$info['Prenom']} {$info['Nom']}</td>
                                </th>
                            </tr>
                            <tr class='p-2 whitespace-nowrap '>
                                <th class='font-semibold uppercase text-left'>TelProp:
                                <td>{$info['TelProp']}</td>
                                </th>
                            </tr>
                            <tr class='p-2 whitespace-nowrap bg-gray-50'>
                                <th class='font-semibold uppercase text-left'>Addresse:
                                <td>{$info['Addresse']}</td>
                                </th>
                            </tr>


                            <tr class='p-2  whitespace-nowrap'>
                                <th class='font-semibold uppercase text-left'>Age:
                                <td>{$info['AgeProp']}</td>
                                </th>
                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>");
        }
    }

    ?> 
</section>