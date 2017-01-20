<?php

/**
 * @file
 * Vagrant box index file.
 */

// Current directory list.
$dirs = array_filter(glob('*'), 'is_dir');
$projects = array();

// Get last modified date.
foreach ($dirs as $dir) {
  $projects[$dir]['name'] = $dir;
  $projects[$dir]['timestamp'] = date('d/m/Y H:i:s', filemtime($dir));
};

// Tool list.
$tools = array(
  array(
    'title' => 'Adminer Database Manager',
    'url' => 'adminer.php',
    'name' => 'Adminer',
    'fa-icon' => 'database',
  ),
  array(
    'title' => 'View sent/received mails',
    'url' => 'http://10.0.0.10:8025',
    'name' => 'Mailhog',
    'fa-icon' => 'envelope',
  ),
  array(
    'title' => 'phpinfo()',
    'url' => 'phpinfo.php',
    'name' => 'PHP Info',
    'fa-icon' => 'code',
  ),
  array(
    'title' => 'View apache logs',
    'url' => '/stats/logs',
    'name' => 'Pimp my Log',
    'fa-icon' => 'exclamation-triangle',
  )
);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Drupal/PHP Vagrant LAMP</title>
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="data:image/png;base64,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"/>
    <!-- CSS START -->
    <style>
      /**
       * Base
       */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      html {
        -ms-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        -webkit-text-size-adjust: 100%;
        font-family: sans-serif;
        font-size: 10px;
      }
      body {
        background-color: #fff;
        color: #333;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        margin: 0;
      }
      img {
        display: block;
      }
      h1, h2 {
        font-size: 1.4em;
        color: #003772;
        margin: 0 0 12px 0;
      }
      a {
        color: #337ab7;
        text-decoration: none;
      }
      a:hover,
      a:focus {
        color: #23527c;
        text-decoration: underline;
      }
      a:focus {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
      }
      ul {
        margin: 0;
        padding: 0 0 0 8px;
      }

      /**
       * Structure
       */
      #main {
        -moz-flex-direction: column;
        -ms-flex-direction: column;
        -webkit-flex-direction: column;
        display: -moz-flex;
        display: -ms-flex;
        display: -webkit-flex;
        display: flex;
        flex-direction: column;
        min-height: 100%;
      }
      section#container {
        -moz-flex-direction: row;
        -moz-flex: 1;
        -ms-flex-direction: row;
        -ms-flex: 1;
        -webkit-flex-direction: row;
        -webkit-flex: 1;
        display: -moz-flex;
        display: -ms-flex;
        display: -webkit-flex;
        display: flex;
        flex-direction: row;
        flex: 1;
      }
      #bar {
        border-right: 2px solid #f7f7f7;
        width: 200px;
      }
      #projects {
        -moz-flex: 1;
        -ms-flex: 1;
        -webkit-flex: 1;
        flex: 1;
      }

      /**
       * Header
       */
      #header {
        align-items: center;
        background-color: #f7f7f7;
        border-top: 5px solid #f7c03e;
        display: flex;
        height: 38px;
        justify-content: space-between;
        padding: 16px 30px;
      }
      #header #header-logo img {
        height: 38px;
        width: auto;
      }
      #header h1 {
        margin: 0;
      }

      /**
       * Aside
       */
      #bar {
        padding: 22px 10px 0 30px;
      }

      /**
       * Projects
       */
      #projects {
        padding: 22px 20px 0 30px;
      }
      #projects li.project-item > * {
        display: inline-block;
        vertical-align: top;
      }
      #projects .project-icon {
        font-size: 2em;
        margin-right: 12px;
      }
      #projects .project-data {
        overflow: hidden;
      }
      #projects .project-header {
        font-size: 1.1em;
      }
      #projects .date.modified {
        color: #a0a1a8;
        margin-top: 6px;
      }
      #projects .date.modified .value {
        color: #333;
      }

      /**
       * Item lists
       */
      ul.icon-list {
        list-style: none;
        font-size: 1.1em;
      }
      ul.icon-list i.fa {
        color: #a3a3a3;
      }
      ul.icon-list li {
        margin-top: 6px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
      }
      ul.icon-list li:first-child {
        margin-top: 0;
      }
      ul.icon-list .fa {
        text-align: center;
        width: 28px;
      }
      ul.project-list {
        list-style: none;
        padding: 0 12px;
      }
      ul.project-list li {
        border-bottom: 2px solid #f7f7f7;
        padding: 12px 0;
      }
      ul.project-list li:first-child {
        border-top: 2px solid #f7f7f7;
      }
      ul.project-list li .project-title {
        font-size: 1.2em;
        font-weight: bold;
      }
    </style>
    <!-- CSS END -->
  </head>
  <body>
    <div id="main">
      <header id="header">
        <div id="header-logo">
          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPgAAABACAYAAAA3SLoTAAASMUlEQVR42uydC3QU1RnHbWurtWpf9nGsWiAvFEEEX6BIEAkPi6VVWqnHauvjVCulp+pRzxGLlSqoZHfJQx6CUjViMAhsEiNCkYcQMjO7eZo3Cdkku5vHJiQh2exuMr1fupt7M9mdvTOzm91khnP+B9hk770zc3/3fvf7vnvnAp7nRWW1WqfZ7fZDSPk2m+1W+Gy8CNoL7Yb2w3XAZ5o0qUkBf2CxWH6EAElBcHiQeEK7Wltbr4zmi4L2QTsF7fbA9cB1qf2ha1I34BciGJ5EagcwAqi7paXlxerq6oui6WKgPdAuaJ9I2+G6noLrVPvD1zTxJTTHF6DOXwwgUOoMAmplNFwIassKaI+EthfD9aq9A2ia2PKtVSejDp+FxEtRd3c373Q64d+HURnTI7TOng71I/EylQXXr/aOoGmCAl5jsW5EnbxPChQdHR28x+Ph4Y/L5Rpe4yKljdUaF+qB+rCPQJH6aptaN6q9M2iagICvzCjJKaxtqqIBoa2tje/v7+fxHww4IQcy21eHcY17ISr/aagH16lMxQ3ttc8e681Ue2fQNAEBj9Nxv43Vs/zT+yoaGppt1kAQ9PT0YKrFAMcqy63umB/Kxu411c2HckMFtsXaYn/l1Hn7kmw3v8ToTlR7Z9A0AQGfvZX9NgLcBpBfl8Lx6cdrS212+3l/s3dfXx8V4M02e4uB7S5Zmu0uQ7V8IxQNhXLi9Gz5y3lVJVC+ErDR9fXuKjpXszzXxSO4QZVQvto7g6YJ6mSLNbCvAeA+zd1mdh4us/j1pjscDt7tdgcC3HmgvINZ8ZnLA+B4Z8aFoWho7GY2yde+GWmc5yOmnoH6pMJ9pKqtetXBftw+pMXZ7mfU3hE0TWDA43XMFATOIMBD6v6MEltlg7XGHyhdXV38wMDAMODm+nbzw184OwAYgfaHBHA9axS2L3FHYUdBdWMhDdiVja31a77s65y+tYKftbOOX7S/z9c+13Ijf4XaO4KmiSkSoMMYHqx4A8uvzassR2ZxmxAa5Ozi2zu77M+f6D0DsATQYNKBPkVhqCkGcxw5AAn18J6yM3UWm98YeJPN3v5WQXfDUm97APCh69ps5m/7oJlfbHR/ovZOoEkNgBu43wUCCJvFdRyCpt/nLd9qPme6JwfACaIc9yYljYzRswZog5gS0EC04VC12Wazd3jX2a69ZZ3laLmA24EBB3lBNzXEGLglau8ImiY44NPWlX0HdfiWYCAtQGZxhrn5+H15LmdQsPEatyPpc/57chqYsPHEZajeLqibRjemm5y72ObTaLmA2xcQcKwYA5ut9s6gaeJJMFMyb1BABLNePcAiTa6n5DQQec7/BnVK0fw9HXaokw5wLLV3Bk0THPAEPZNAC9G83e1SIS+XGoq6YB3/TVRXtRS4E1LNdVCfBrgmTQLAQbE67ksakK5NKymSOosvNbqTpDnXmGUSZ29wnFVpgGvSFADwOAP7B0qYBhd+2tMpEXCjxNBYXqD6b9li9uPx5xyLjS7RNty8q0EDXJOKZ/DN1Rehzt5OA/nM7VWsxFl8cGmuM4Zq7a3jrhWr+4Y002gH247aQpp2zN/TaYvTcwUa4JpUBzgoRsfqKWfxnqQDOCuM0qOuo5q9DWw6WdecrWZ+/aEa8JIHAtx1977efso2rIX1PRpEHvGl6YIUhPHejtOx74GmJJtuklPGUMqwgdvhKyd2s+k6aktHxz4J3yEF0QelnSMmmYuN1THr0L05iNSE1EfcbzeSFcmEnLNZcQZufayeuTdIOx+DttEo1sCkokH4udjNBfPhWYUi1Zl8TiC4NjlljW4r+wL9spO9w/c9xNm/xO+TcvltBHQuSsDB5MWzJp3OJWbyl4rehA3s92Hw8OXHv/pFFX+22TaUuFJtsfLP5VT4QB/WtLe/Lqas37NoP38lvtb8y2N03EYYIGRn2RnYPcPhNj23RU4ZEIsnB86rkk9+l3pg0LNtwueCAHlI7vVcuZW9BAYbKEeiaoOBIaNM0Fl0X3+vKBNSZ5rjp9yBmDeLfiq1LH/LVdoB2Tup8CAEcqHofVIu0fDUcZoC4lCiiGRnW7ZrdZAZ8Rlf+S/nVfJW2+gMtaPljSPTVrM6Wynr3x9otpLbeeL0zH1EW1ouyMz8ltQyRgLF7JY5MJDZftjfIT1ykSenM6G2fBEWwDEQj8lPdeZS/N0nsH4UAY716bgCHCV+PExbyB27W2vpARffvQUdDAFeR5a/+L0iPrf4rHDHGnaupRRW0zv6PMtDvc6B2dZncYCmGEx4gw39LOzwfR8GDAnLg3d93/MuawZ8S5ZpySclH74BM7/g+VohFyHGwFw/482ioWSlSe8euTj+LfaKqTrzpBgdc/vQdwzcP5Gp/kcJgJciE3WFP8XpmFWo/61GAHwM10NcXydYd2J1iPSpZqLuNHyv2eMKAcfazNwYCsDR57PgPgQS+u754fbr2M1ivxvETGM76UJmxSVSZ/HFOe4lATrYrwPVszavCoFtGwX4nA9tVZT1WlZm8nh2DaFg1iXN9LCb59ghem54YElmpyMwjhGWwKMyrJFDRFvsCSkmSSfo0gIO4Vi6e8M8QPYB+L/k5Y+Ou4soo2GSzvwD8CH4ZnOp1yhclhCDRY58wOlFcgnlif0ulVlDo7v2drdLAtzozg1w8/4r6rlHa29j0Vne0mz7/wUauFYcGgsio5vaqRJ+M125eR6bzC3Hgwpb4bW8VhPtOCjDPO8lynwVPg8b4PRAWYhrel1qvTDg4u9zyYIQLID2D5mAQ//708hZnLtt3AAOMwIl4JBAIhoym/dxO1LbiJDZIqMzTm59894phL9h62chbYguaR9/Na4v0ma6cvMcWw0g5t/wGcxGMCvJcSKB2T2i8+q5X0UH4NxXcq0juL/kHov4ZG6e9949SlxrvmzAdQUzYSlBfHZ4fACOCztNCd35JKPTJYAKZnZ+xrZKX5aZcEY1CG7cNolOhH60r9uFJNliiKSZTm+e0w8oqJzZxH3MxzMM+xfa9sOaeqRTi0mMNODC7EooQ+7yB9bhvpAb+CfI9X1CyunJcgH3Rp0GyPs2TgDHIx2NbnrvrEkI1seFNv727UUk4KS6lubylw91rtTTP8bmIZ2u31JhhnJu+Y8FLAgYTMScayvwdUXcTFdunuvZleQ6MFAUAtbk6gVceH+5FPjM3xkIEMuWCzi+Nuy4GzeAg+eUcrsmrEeahWA1IWdYg7WF33jMws/LsPqZWV1rvI1+QWoIYEHWuTYv4L4HiBxuuA5CzYlH8CmvY2WmwzFT4fOeM1lEp39TkExxDXxOOpHUBzh2QgZaNoF1Q1wvpwRwCLNC5IKwqJZEPeBkphYldADsAAlXfXPLkNf7s8oOftXnTj/weaqnZQ7tRW+QAvfU1KIKXxkAOE5XPeMvc209vp6xM9Nh9giHeT4trexSyCoTc+xAhyVg+vu4BlzPniJDgVKckGIW1WR9/s/ImHh8CjtVLuBCZx6kQkMoeFwADus7WvBQ6uoIwE/UtvPPHOsVXR/f+kHza1Jn77kf2auHv/9+E1pDmQMBPnhPtnMKvp4xNdMdMEvTmucyY9UNwo7kxyLKH5eAY8++nbAS10vIEcjAIDBbgyR0gb9irSLANxVcTQ68EIeOesDJGYEOcOfItS+Fh/v2j1rzqcDGu8asvtAYnsE5SFfFgOP6D4YFZnrn15LQe89ZI+E4MgQ4hTaGvGeTU02/DDfgkOgBg08IAccHfuD7+ZsQPgdhWPFrJYDjfRwYYBigohtwPIs/IQdwLOWAY2devRl/X2ii1woSajwYnMia6crNc+z97SfDPiIdoZh0IoULcGiT1zwdhA5OmclWA0uHQPIe5X1CmFUHWXShtKTikwt/QdYBoVolgENYEp4nmZgT/YDjs9HORwHgvYv243BckDV4y2yWxw82Csx05d5z5lF/YR9/ApOTdCKFCXCYZff6vkMDuEy54AAQOU5ISOcNAmw+mdwjG3D88w2kVQBr/ygHHHfKCAMO4TBO8H2oE0J0sD4bCbjR/QZuf2TNdDHzHJxBUg7BoHU4gdNoxOy06XR8OABHHXVfeAHnvsKORHonJOX9JcOKoFqlgEMqrBDCcQF4fDJzS4QBh1i3I0A56Gc9/NwMOzbP9zvxDrEIm+ki5vk5COcELRObfwNk2iY4csREDiQwo0cN4Dq2HvZjj5KefUWQD8FhJyJ1WO1BcksobDUVu0d4HY6ThpQADoLNN+RyJHHdkQujHnAQNCpSgE9NLS6lLtfoFqQMRo2ZLjTP36crE8dtFag0coDTO9kA9JEQMauUvAWHXjivQBHg2IpoIzMKoxtwvLZ5OkKAw+/VUJeb48GdIkrMdOXmOXNUEeDYiRStgOOdjHq2kQwFwmc0bQHzGDsh5QiHHmUDjj30z5JlwrsHohtwfAN7aQBfkNUFZrMjFIDHGUyNEgaNNpQCi83eKDHTFZjnwk0koEyAiUbodzuCOpHwEoD3CZxakQAcBHvLBYPNOqlOSACd/h4xO0fWZ5qjCHA8yFuJWXxNlAOOH5QY4LD5Y9bOM76jlEyhAPzmXWdxaEz2q5Iib6YrMM/XyAirCTOsQDVBUmf7iJzqlyIFOMyggoMxe9HxWldJPInXKOXMtpHZlFyKIsCxP+CvZJgPTpCJesBjDAVzA4EIISt4sR8Z3kDA94kBmZRpPxn8cEenhxrwz5wJkQccm+mkOa7Ae54vZ2AAwcGFtE4kQey5CTYBjT3g+IBCQT/4kMIJ6SbqeFDi2n2DMASpFHAwywVp2KVRDzgI4nu0a5pZO2s5fyCiFxfaMko6K6x2O284WlOcYPD/brQZ2ysZCea5YCdP1JjpoGrp5jnePCJjYCDTPZswhNxGEQfXnwXnoNWDgwhCbrAOJo9sgsw17662knAADsJ7rXHePaUTsg8cXVLuE8AqeF/dAqWAg4SHQowLwCHbiBJwWD+3Q2opkT7qfPVUD2extgyS56zVN9rcj2d9fVrgJBlE6/gO+qOgPA9FE+DeUBWPJXkWhg71PPHdDhgYZHSKTTROJDDTsbVAr7AAjh1/faKbOPB9OoJnYCZL5hHYFYI9/YoBhxAZLI3GD+A4ZdJJ/0ohaxkA+NhhZ1Hp2dYuADqQ2JqmtgXvFJq9571JeUWSA20LvTgCIFNvWZRpnnNCZ51UwXnttDPhNenFP4S3rcoBHAaSMOwme52sAxxwQZ2QOuZ+sTIps/9aYMBTBjg+W278AI4r+oB+e6e57pPitjoAmFYZTH3pwk8c9RJi34Zogpu0dsjD6MFjC+DTZmWR30WOr1vlPy8m1VcObNqg8bXAjOw9MqmdXN96fQtVACrMdOBMgs4OywGaFx9AbryUNGnypRBwPJW/tvp+Dqmp2AkpTfE6Zgp5v2HTjtiLD2D5RLtMwvcfv/hAJnfpRP13hA1wiJNK2wXG9ryUV1naaLUFg3vwZJ2DfeDz/h4p8fRlOf3T1f6qGk2alANOhhYMbKVUM256KteUwdQ1+IO7pqmlcs3RPgsAK1En1f4wNWmSBThNor4cJe4oLD9V1djlPefcrmO6S/D+cYnKcT2i9oepSVPIAYdwCT6LSpY8a3LPnFiR68JxbunqWm7kL1H7w9SkKeSAgyBtUknu78wdtfny4YYz1zzpan+QmjSFDXA4rTKSgC/Lcc1U+4PUpCk8gOM83pqIAJ7jLlD7Q9SkKXyA4xjni6EG/M5MB49e6h/kbaGux9X+EDVpCjvgk9IKfo4TIZQBvvDTHv6G7VXelxt0iQHefe9+/jK1P0RNmsIMOD7oTgHg5Nlq8HkwwMG5tk3tD1CTpjEDHKU0LpYBOBx1fBq945tPSCnEn1MAnpTtmq32B6hJ05gBDvm2sBVRYlwc3j5afF16CfybFvBe9DqitWp/eJo0jSngoOEXsRmYA1JMdNhOCm8fhcMixABfnOPafbeRv0btD06TpggBjgVv10SQlgUBHBxqJi/A3uOe6kYBjmZs87Ic951qf2CaNEUJ4Hizu/fcaYcI4KPOWwOwr99SDn87lma7nliHzH+1PyxNmqIOcBDxgv80JA8F4CA3mrV18zK7f6L2h6RJU5QDjgXncsfpmUNBAM9LMvZPVfvD0fS/du7YBgAICsJwZx9L0GitYhoTaMUCxhCxCAl5nZ7kFe+Kb4LLtT+84m6Vjevg1GprpiwnfRSAX9h7ZZTu0bFXm2fwaSvpgwD8dADlzJKTOY39swAAAABJRU5ErkJggg==" alt="Vagrant"/>
        </div>
        <div id="header-name">
          <h1>Drupal/PHP Vagrant LAMP</h1>
        </div>
      </header>
      <section id="container">
        <aside id="bar">
          <h2>Herramientas</h2>
          <ul id="tool-list"class="icon-list">
            <?php
              foreach ($tools as $tool) {
                print <<<TOOL
                <li>
                  <i class="fa fa-{$tool['fa-icon']}"></i>
                  <a href="{$tool['url']}" class="tool" title="{$tool['title']}">{$tool['name']}</a>
                </li>
TOOL;
              }
            ?>
          </ul>
        </aside>
        <div id="projects">
          <h2>Proyectos</h2>
          <ul class="project-list">
            <?php
              if (empty($projects)) {
                print '<p>Crea una carpeta en el directorio raíz para iniciar un proyecto.</p>';
              }
              else {
                foreach ($projects as $name => $data) {
                  print <<<PROJECT
                  <li class="project-item">
                      <div class="project-data">
                        <div class="project-header">
                          <a href="$name" class="project-title">$name</a>
                        </div>
                        <div class="project-details">
                          <div class="date modified">Última modificación: <span class="value">{$data['timestamp']}</span></div>
                        </div>
                      </div>
                  </li>
PROJECT;
                }
              }
            ?>
          </ul>
        </div>
      </section>
    </div>
  </body>
</html>
