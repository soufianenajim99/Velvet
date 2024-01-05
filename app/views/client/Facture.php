<!DOCTYPE html>
<html dir="rtl">

<head>
    <meta charset="UTF-8" />
    <title>Facture</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300|Raleway:200,300" rel="stylesheet" type="text/css" />
    <style>
        * {
            box-sizing: border-box;
        }

        html {
            height: 100%;
        }

        body {
            min-height: 100%;
            margin: 0;
            display: flex;
            flex-flow: column nowrap;
            justify-content: center;
            align-items: sretch;
            font: 12pt/1.5 'Raleway', 'Cambria', sans-serif;
            font-weight: 300;
            background: #fff;
            color: #666;
            -webkit-print-color-adjust: exact;
        }

        header {
            padding: 16px;
            position: relative;
            color: #888;
        }

        header h1,
        header h2 {
            font-weight: 200;
            margin: 0;
        }

        header h1 {
            font-size: 27pt;
            letter-spacing: 4px;
        }

        body>* {
            width: 100%;
            max-width: 7in;
            margin: 3px auto;
            background: #f0f0f0;
            text-align: center;
        }

        section,
        table {
            padding: 8px 0;
            position: relative;
        }

        dl {
            margin: 0;
            letter-spacing: -4px;
        }

        dl dt,
        dl dd {
            letter-spacing: normal;
            display: inline-block;
            margin: 0;
            padding: 0px 6px;
            vertical-align: top;
        }

        dl.bloc>dt,
        dl:not(.bloc) dt:not(:last-of-type),
        dl:not(.bloc) dd:not(:last-of-type) {
            border-bottom: 1px solid #ddd;
        }

        dl:not(.bloc) dt {
            border-right: 1px solid #ddd;
        }

        dt {
            width: 49%;
            text-align: right;
            letter-spacing: 1px !important;
            overflow: hidden;
        }

        dd {
            width: 49%;
            text-align: left;
        }

        dd,
        tr>td {
            font-family: 'Nunito';
        }

        section.flex {
            display: flex;
            flex-flow: row wrap;
            padding: 8px 16px;
            justify-content: space-around;
        }

        dl.bloc {
            padding: 0;
            flex: 1;
            vertical-align: top;
            min-width: 240px;
            margin: 0 8px 8px;
        }

        dl.bloc>dt {
            text-align: left;
            width: 100%;
            margin-top: 12px;
        }

        dl.bloc>dd {
            text-align: left;
            width: 100%;
            padding: 8px 0 5px 16px;
            line-height: 1.25;
        }

        dl.bloc>dd>dl dt {
            width: 33%;
        }

        dl.bloc>dd>dl dd {
            width: 60%;
        }

        dl.bloc dl {
            margin-top: 12px;
        }

        dl.bloc dd {
            font-size: 11pt;
        }

        table {
            width: 100%;
            padding: 0;
            border-spacing: 0px;
        }

        table tr {
            margin: 0;
            padding: 0;
            background: #fdfdfd;
            border-right: 1px solid #ddd;
            width: 100%;
        }

        table tr td,
        table tr th {
            border: 1px solid #e3e3e3;
            border-top: 1px solid #fff;
            border-left-color: #fff;
            font-size: 11pt;
            background: #fdfdfd;
        }

        table thead th {
            background: #e9e9e9;
            background: linear-gradient(to bottom, #f9f9f9, #e9e9e9) !important;
            font-weight: 300;
            letter-spacing: 1px;
            padding: 15px 0 5px;
            /*&:not(:last-child)*/
            border: none !important;
        }

        table tbody tr:last-child td {
            border-bottom: 1px solid #ddd;
        }

        table tbody td {
            min-width: 75px;
            padding: 3px 6px;
            line-height: 1.25;
        }

        a {
            color: #992c2c;
        }

        a:hover {
            color: #b00;
        }

        @page {
            margin: 0.5cm;
        }

        html,
        body {
            background: #333231;
        }

        header:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            border-top: 12px solid #333;
            border-left: 12px solid #ddd;
            width: 0;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.18);
        }
    </style>
</head>

<body>
    <header>
        <h1>FACTURE
            <h2>Magazin - Velvet</h2>
        </h1>
    </header>
    <section class="flex">
        <dl>
            <dt>Facture #</dt>
            <dd>20140603</dd>
            <dt>Date de facturation</dt>
            <dd>05.01.2024</dd>
        </dl>
    </section>
    <section class="flex">
        <dl class="bloc">
            <dt>Facturé à:</dt>
            <dd>
                Company X &amp; Son Inc.<br>
                2789 Some street,<br>
                ASafi City, Youcode
                <dl>
                    <dt>Attn</dt>
                    <dd>Le Big Boss</dd>
                    <dt>Téléphone</dt>
                    <dd>(450) 555-2663</dd>
                    <dt>Courriel</dt>
                    <dd>velvet@gmail.com</dd>
                </dl>
            </dd>
        </dl>
        <dl class="bloc">
            <dt>Description de service:</dt>
            <dd>Développement AIR</dd>
            <dt>Période totale:</dt>
            <dd>24 Mai au 2 Juin 2024</dd>
        </dl>
    </section>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name Produit</th>
                <th>Description</th>
                <th>Category</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($Facturs as $Facture) {

                    ?>
                    <td>
                        <?php echo $Facture['Id_product']; ?>
                    </td>
                    <td>
                        <?php echo $Facture['Product_name']; ?>
                    </td>
                    <td>
                        <?php echo $Facture['Product_descr']; ?>
                    </td>
                    <td>
                        <?php echo $Facture['Id_category']; ?>
                    </td>
                    <td>
                        <?php echo $Facture['Product_price']; ?>
                    </td>
                <?php } ?>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3"></td>
                <td>Total:</td>
                <td>Dhs</td>
            </tr>
        </tfoot>
    </table>
    <!-- Scripts -->
    <script type="text/javascript">
        function PrintPage() {
            window.print();
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            PrintPage();
            setTimeout(function () { window.close() }, 750);
        });
    </script>

</body>

</html>