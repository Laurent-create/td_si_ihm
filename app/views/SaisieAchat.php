<div class="container mt-4">
  <!-- Formulaire -->
  <div class="row justify-content-center">
    <div class="col-md-4">
      <h2 class="text-center mb-3">Ajouter un Achat</h2>
      <form>
        <!-- Sélection du produit -->
        <div class="form-group">
          <label for="produitSelect">Produits</label>
          <select class="form-control" id="produitSelect">
            <option value="1">Produit 1</option>
            <option value="2">Produit 2</option>
            <option value="3">Produit 3</option>
          </select>
        </div>
        
        <!-- Quantité -->
        <div class="form-group">
          <label for="quantiteInput">Quantité</label>
          <input type="number" class="form-control" id="quantiteInput" min="1" value="1">
        </div>

        <!-- Bouton Valider -->
        <button type="submit" class="btn bg-dark text-white btn-block">Valider</button>
      </form>
    </div>
  </div>

  <!-- Tableau des achats en cours -->
  <div class="row justify-content-center mt-4">
    <div class="col-md-8">
      <h4 class="text-center mb-3">Achats en cours</h4>
      <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th>Produit</th>
            <th>Prix Unit</th>
            <th>Qté</th>
            <th>Montant</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Produit 1</td>
            <td>10.00 Ar</td>
            <td>2</td>
            <td>20.00 Ar</td>
          </tr>
          <tr>
            <td>Produit 2</td>
            <td>15.00 Ar</td>
            <td>1</td>
            <td>15.00 Ar</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Bouton Clôturer Achat -->
  <div class="row justify-content-center mt-4">
    <div class="col-md-4">
      <button class="btn btn-danger btn-block">Clôturer Achat</button>
    </div>
  </div>
</div>
