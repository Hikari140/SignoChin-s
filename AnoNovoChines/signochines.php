<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signo Chinês</title>
</head>
<body>
    <h1>Descubra o Signo do Ano Chinês</h1>
    <form method="post">
        <label>DIGITE APENAS O ANO</label>
        <input type="number" id="ano" name="ano" placeholder="ex: 1997"></input>
        <input type="submit" name="descubra_ano" value="CLIQUE AQUI"></input>
    </form>

    <?php
    
    $ano = $_POST['ano'];

    if ($ano==1912 || $ano==1924 || $ano==1936 || $ano==1948 || $ano==1960 || $ano==1972 || $ano==1984 || $ano==1996 || $ano==2008 || $ano==2020) {
        echo "Ano do Rato";
    } elseif ($ano==1913 || $ano==1925 || $ano==1937 || $ano==1949 || $ano==1961 || $ano==1973 || $ano==1985 || $ano==1997 || $ano==2009 || $ano==2021) {
        echo "Ano do Boi";
    } elseif ($ano==1914 || $ano==1926 || $ano==1938 || $ano==1950 || $ano==1962 || $ano==1974 || $ano==1986 || $ano==1998 || $ano==2010 || $ano==2022) {
        echo "Ano do Tigre";
    } elseif ($ano==1915 || $ano==1927 || $ano==1939 || $ano==1951 || $ano==1963 || $ano==1975 || $ano==1987 || $ano==1999 || $ano==2011 || $ano==2023) {
        echo "Ano do Coelho";
    } elseif ($ano==1916 || $ano==1928 || $ano==1940 || $ano==1952 || $ano==1964 || $ano==1976 || $ano==1988 || $ano==2000 || $ano==2012 || $ano==2024) {
        echo "Ano do Dragão";
    } elseif ($ano==1917 || $ano==1929 || $ano==1941 || $ano==1953 || $ano==1965 || $ano==1977 || $ano==1989 || $ano==2001 || $ano==2013 ) {
        echo "Ano do Serpente";
    } elseif ($ano==1918 || $ano==1930 || $ano==1942 || $ano==1954 || $ano==1966 || $ano==1978 || $ano==1990 || $ano==2002 || $ano==2014 ) {
        echo "Ano do Cavalo";
    } elseif ($ano==1919 || $ano==1931 || $ano==1943 || $ano==1955 || $ano==1967 || $ano==1979 || $ano==1991 || $ano==2003 || $ano==2015 ) {
        echo "Ano do Cabra";
    } elseif ($ano==1920 || $ano==1932 || $ano==1944 || $ano== 1956|| $ano==1968|| $ano==1980 || $ano==1992 || $ano==2004 || $ano==2016 ) {
        echo "Ano do Macaco";
    } elseif ($ano==1921 || $ano==1933 || $ano==1945 || $ano==1957 || $ano==1969 || $ano==1981 || $ano==1993 || $ano==2005 || $ano==2017 ) {
        echo "Ano do Galo";
    } elseif ($ano==1922 || $ano==1934 || $ano==1946 || $ano==1958 || $ano==1970 || $ano==1982 || $ano==1994 || $ano==2006 || $ano==2018 ) {
        echo "Ano do Cão";
    } elseif ($ano==1923 || $ano==1935 || $ano==1947 || $ano==1959 || $ano==1971 || $ano==1983 || $ano==1995 || $ano==2007 || $ano==2019 ) {
        echo "Ano do Porco";
    } else 
    

    ?>

</body>
</html>