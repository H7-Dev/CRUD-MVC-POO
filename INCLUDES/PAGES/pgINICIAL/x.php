<div class="pgInicial">
<?php include "INCLUDES/PAGES/pgInicial/ASSETS/div.a.header.html"; ?>
<?php include "INCLUDES/PAGES/pgInicial/ASSETS/div.searchBar.html"; ?>

<div class="main">
    <div class="tbBaralhos">
        <header>
            <button class="btnAdd" title="Criar Baralho">
                <svg height="15" viewBox="0 0 24 24"><path d="M1.5,11.3c0-0.1,0-0.2,0.1-0.2c0.2-0.6,0.6-0.9,1.2-1c0.1,0,0.2,0,0.3,0c2.2,0,4.5,0,6.7,0c0.1,0,0.2,0,0.3,0c0-0.1,0-0.2,0-0.3c0-2.3,0-4.5,0-6.8c0-0.6,0.2-1.1,0.8-1.4c0.4-0.2,1.8-0.2,2.2,0c0.5,0.2,0.7,0.6,0.8,1.1c0,0.1,0,0.2,0,0.3c0,2.2,0,4.4,0,6.7c0,0.1,0,0.2,0,0.3c0.1,0,0.2,0,0.3,0c2.3,0,4.5,0,6.8,0c0.7,0,1.3,0.4,1.5,1c0,0.1,0,0.1,0,0.2c0,0.5,0,1,0,1.4c-0.1,0.7-0.6,1.1-1.3,1.2c-0.1,0-0.2,0-0.3,0c-2.2,0-4.4,0-6.7,0c-0.1,0-0.2,0-0.3,0c0,0.1,0,0.2,0,0.3c0,2.2,0,4.4,0,6.6c0,0.8-0.2,1.5-1.2,1.7c-0.5,0-0.9,0-1.4,0c-1-0.3-1.2-1-1.2-1.7c0-2.2,0-4.4,0-6.6c0-0.1,0-0.2,0-0.3c-0.1,0-0.2,0-0.3,0c-2.2,0-4.5,0-6.7,0c-0.4,0-0.8-0.1-1.1-0.4c-0.2-0.2-0.3-0.5-0.4-0.8C1.5,12.2,1.5,11.8,1.5,11.3z"></path></svg>
            </button>
            <span class="sp_tituloTable">Pessoas</span>
        </header>
        <main>
            <div class="containerTable">
                <table>
                  <thead>
                    <tr>
                     <th class="thActions" style="text-align: center;">Ações</th>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Telefone</th>
                    </tr>
                  </thead>
                  <tbody class="tbody">
                  <?php foreach($resultData as $data): ?>
                    <tr>
                        <td>
                            <a class="button btn-edit" href="./index.php?a=search&v=editCreate&search=<?= $data['id'] ?>">Editar</a>
                            <button class="button btn-delete" onclick="verifyDelete(<?= $data['id'] ?>)">Excluir</button>
                        </td>
                        <td><?= $data["id"]; ?></td>
                        <td><?= $data["name"]; ?> </td>
                        <td><?= $data["email"]; ?></td>
                        <td><?= $data["phone"]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
              </div>
        </main>
        <footer>
            <span class="spTotal">X0 Registros</span>
            <br>
            <div class="pagination">
                <label class="in_pageSelc" for="in_pageSelc">
                    <span class="spPagSelc">Pág: </span>
                    <input type="text" name="in_pageSelc" class="in_pageSelc" value="1" maxlength="3">
                </label>
                <label class="in_rowsPagLimit" for="in_rowsPagLimit">
                    <span class="spPagSelc">Limite por Pág: </span>
                    <input type="text" name="in_rowsPagLimit" class="in_rowsPagLimit" value="5" maxlength="2">
                </label>
                <label class="in_rowsAtual" for="in_rowsAtual">
                    <span class="spPagSelc">Pág Atual: </span>
                    <input type="text" name="in_rowsAtual" class="in_rowsAtual" value="1" maxlength="2" readonly="">
                </label>
                <button class="btnToHome" type="button">
                    <svg height="15pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M2145 4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9 4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9 358 -524 532 -535 557 -19 48 -19 128 0 176 11 25 178 199 535 557 358 359 524 532 535 557 72 174 -118 349 -290 269z"></path><path d="M3635 4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9 675 -669 707 -679 62 -20 149 -9 198 26 79 56 111 169 73 262 -11 26 -193 215 -593 614 l-577 578 581 582 c635 636 610 607 602 719 -5 73 -43 132 -107 166 -57 30 -140 31 -196 3z"></path></g></svg>
                </button>
                <button class="btnPagAnt" type="button">
                    <svg height="15pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M2995 4030 c-26 -13 -228 -208 -571 -552 -505 -507 -532 -537 -571 -613 -56 -109 -76 -189 -76 -305 0 -116 20 -196 76 -305 39 -76 66 -106 571 -613 372 -374 544 -539 574 -553 63 -31 156 -24 214 16 83 59 113 177 68 270 -13 28 -187 208 -531 551 -352 350 -518 521 -530 549 -10 22 -19 60 -19 85 0 25 9 63 19 85 12 28 178 199 530 549 361 360 517 523 532 553 31 64 24 157 -16 215 -59 83 -179 113 -270 68z"></path></g></svg>
                </button>
                <button class="btnPagNext" type="button">
                    <svg height="15pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M2064 4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9 -555 -640 -523 -525 -533 -536 -545 -587 -4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9 -3 144 -23 200 -50 140 -57 148 -620 713 -296 297 -553 547 -573 558 -48 24 -130 25 -184 0z"></path></g></svg>
                </button>
                <button class="btnToEnd" type="button">
                    <svg height="15pt" viewBox="0 0 512.000000 512.000000" preserveAspectRatio="xMidYMid meet"><g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)" stroke="none"><path d="M1215 4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9 -594 -598 -620 -70 -170 110 -344 283 -273 4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM92z"></path><path d="M2704 4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9 -555 -640 -521 -523 -533 -536 -545 -587 -24 -105 27 -208 122 -248 50 -20 124 -19 173 4 56 26 1079 1054 1130 1135 20 32 4B8r3B4p7yhRXuBWLqsQ546WR43cqQwrbXMDFnBi6vSJBeif8tPW85a7r7DM961Jvk4hdryZoByEp8GC8HzsqJpRN4FxGM9 -573 558 -48 24 -130 25 -184 0z"></path></g></svg>
                </button>
            </div>
        </footer>
    </div>
</div>
</div>