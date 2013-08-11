{{ content() }}

<!-- Simple include of a partial -->
<div id="footer">{{ partial("partials/footer") }}</div>

<!-- Passing extra variables -->
<div id="footer">{{ partial("partials/footer", ['links': $links]) }}</div>

