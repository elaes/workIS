<body style="background-color:#ddd">
    <table align="center" border="0" cellpadding="0" cellspacing="0"
           width="550" bgcolor="white">
        <tbody>
            <tr style="display: inline-block;">
                <td style="height: 250px;
                           padding: 20px;
                           border: none;
                           background-color: white;">
                    <h4 style="text-align: left;
                               align-items: center;">
                        Candidature au poste de : <?= $this->poste ?>
                   </h4>
                    <p class="data"
                       style="text-align: justify-all;
                              align-items: center; 
                              font-size: 15px;">
                        Bonjour,
                    </p>
                    <p class="data"
                       style="text-align: justify-all;
                              align-items: center; 
                              font-size: 15px;
                              padding-bottom: 12px;">
                        <?= $this->message ?>
                    </p>
                    <p style="text-align: justify-all;
                    align-items: center; 
                    font-size: 15px;
                    padding-bottom: 12px;">Cordialement,</p>
                    <p>Lassana TRAORE</p>
                </td>
            </tr>
        </tbody>
    </table>
</body>