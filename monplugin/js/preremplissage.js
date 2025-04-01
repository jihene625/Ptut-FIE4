document.addEventListener('DOMContentLoaded', function () {
    const url = window.location.href;
  
    // Remplissage automatique pour le formulaire ID=1 (Demande de matériel informatique)
    if (url.includes('form.form.php?id=1')) {
      document.getElementById('question_2').value = '##user.firstname## ##user.realname##';
      document.getElementById('question_3').value = '##user.phone##';
      document.getElementById('question_4').value = '##user.department##'; // remplace si besoin
    }
  
    // Remplissage automatique pour le formulaire ID=2 (Demande de matériel téléphonique)
    if (url.includes('form.form.php?id=2')) {
      document.getElementById('question_10').value = '##user.firstname## ##user.realname##';
      document.getElementById('question_11').value = '##user.phone##';
      document.getElementById('question_12').value = '##user.department##'; // remplace si besoin
    }
  
    // Remplissage automatique pour le formulaire ID=3 (Problème logiciel / Citrix)
    if (url.includes('form.form.php?id=3')) {
      document.getElementById('question_18').value = '##user.firstname## ##user.realname##';
      document.getElementById('question_19').value = '##user.phone##';
      document.getElementById('question_20').value = '##user.department##'; // remplace si besoin
    }
  
    // Remplissage automatique pour le formulaire ID=4 (Demande d’accès réseau / dossiers)
    if (url.includes('form.form.php?id=4')) {
      document.getElementById('question_26').value = '##user.firstname## ##user.realname##';
      document.getElementById('question_27').value = '##user.phone##';
      document.getElementById('question_28').value = '##user.department##'; // remplace si besoin
    }
  });
  