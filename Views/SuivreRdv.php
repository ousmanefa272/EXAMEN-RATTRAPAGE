<h2>Mes Rendez-vous</h2>

<?php if (empty($mesRDV)): ?>
  <p>Vous n'avez aucun rendez-vous.</p>
<?php else: ?>
  <table border="1" cellpadding="5" cellspacing="0">
    <tr>
      <th>ID</th>
      <th>Spécialité</th>
      <th>Date de la demande</th>
      <th>Date du RDV</th>
      <th>État</th>
    </tr>
    <?php foreach ($mesRDV as $rdv): ?>
      <tr>
        <td><?= htmlspecialchars($rdv->getId()) ?></td>
        <td><?= htmlspecialchars($rdv->getSpecialite()) ?></td>
        <td><?= htmlspecialchars($rdv->getDateDemande()) ?></td>
        <td><?= htmlspecialchars($rdv->getDateRDV() ?? '-') ?></td>
        <td><?= htmlspecialchars($rdv->getEtat()) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php endif; ?>

<br>
<a href="index.php?page=demanderRDV">Faire une nouvelle demande</a><br>
<a href="index.php?page=demanderAnnulation">Demander une annulation</a>
