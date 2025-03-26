<div class="container ChoixCaisse">
    <!-- Formulaire -->
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="text-center mb-2">Changer Caisse</h2>
        <form action="<?= Flight::get('base_url') ?>SaisieAchat" method="get">
          <div class="form-group">
            <label for="caisseSelect">Caisse</label>
            <select class="form-control" id="caisseSelect">
              <option value="1">Caisse 1</option>
              <option value="2">Caisse 2</option>
              <option value="3">Caisse 3</option>
            </select>
          </div>
          <button type="submit" class="btn bg-dark btn-block text-white">Valider</button>
        </form>
      </div>
    </div>
  </div>
