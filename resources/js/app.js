import './bootstrap';
import { createApp } from 'vue';
import DashboardChart from './components/DashboardChart.vue';
import CanvasJSVueCharts from '@canvasjs/vue-charts';

const vueContainer = document.querySelector('#vue-dashboard');
if (vueContainer) {
    const app = createApp(DashboardChart);

    // Registra o plugin como um "global plugin"
    app.use(CanvasJSVueCharts);

    app.mount(vueContainer);
}

// Jquery para controlar a exibição do modal
$(document).ready(function() {
    // Abrir o Modal
    $("#openModalBtn").click(function() {
        $("#myModal").fadeIn();
    });

    // Fechar o Modal
    $(".close").click(function() {
        $("#myModal").fadeOut();
    });

    // Fechar o Modal se o usuário clicar fora dele
    $(window).click(function(event) {
        if ($(event.target).is("#myModal")) {
            $("#myModal").fadeOut();
        }
    });
});