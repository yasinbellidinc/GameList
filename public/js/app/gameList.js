$(document).ready(function() {
    $.ajax({
        type: 'GET',
        url: 'https://www.cheapshark.com/api/1.0/deals?title=batman',
        dataType: 'json',
        processData: false,
        success: function(response) {
            const key = 'gameID';

            const dealsGamesList = [
                ...new Map(response.map(item => [item[key], item])).values()
            ];

            dealsGamesList.forEach(element => {
                var gameImg = element.thumb;
                var gameName = element.title;
                var normalPrice = element.normalPrice + ' $';

                var priceDetail = getGamePrices(element.normalPrice, element.gameID);
                var cheapestPrice = priceDetail.cheapestPrice + ' $';
                var discountRate = '% ' + parseFloat(priceDetail.rate).toFixed(2);

                $('#body').append(
                    "<div class='col-xl-4 col-lg-6 col-md-6 isotope-item popular'><div class='box_grid'><figure><img src='" +
                    gameImg +
                    "' class='img-fluid' width='800' height='533'></figure><div class='wrapper'><h3>" +
                    gameName + "</h3><span class='price'>Normal Fiyat: <strong>" + normalPrice +
                    "</strong></span><br><span class='price'>İndirimli Fiyat: <strong>" +
                    cheapestPrice +
                    "</strong></span><br><span class='price'>İndirim Oranı: <strong>" +
                    discountRate +
                    "</strong></span></div></div></div>");
            });
        }
    });

    function getGamePrices(normalPrice, gameId) {
        var rate = 0;
        $.ajax({
            async: false,
            type: 'GET',
            url: 'https://www.cheapshark.com/api/1.0/games?id=' + gameId,
            dataType: 'json',
            success: function(data) {
                cheapestPrice = data.cheapestPriceEver.price;
                highestRate = ((normalPrice - cheapestPrice) * 100) / cheapestPrice;
                rate = highestRate;
            }
        });

        return {
            rate,
            cheapestPrice
        };
    };
})
