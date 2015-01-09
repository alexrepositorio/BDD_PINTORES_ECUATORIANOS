-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2015 a las 15:03:17
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pintores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
`COD_COMENTARIO` int(11) NOT NULL,
  `COMENTARIO` varchar(256) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `WEBSITE` varchar(150) NOT NULL,
  `COD_PINTOR` int(11) DEFAULT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`COD_COMENTARIO`, `COMENTARIO`, `USUARIO`, `EMAIL`, `WEBSITE`, `COD_PINTOR`, `FECHA`) VALUES
(1, 'Mostrar este comentario', 'Javier', 'javier@gmail.com', 'https://www.facebook.com/jafvargas', 3, '2015-01-03 21:59:40'),
(17, 'Perfecto!!!!', 'Enchufe.tv', 'enchufe@gmail.com', 'https://www.facebook.com/enchufetv?fref=nf', 3, '2015-01-05 04:17:53'),
(18, 'Solo hay una obra por que ?', 'Javier', 'javier@gmail.com', 'https://www.facebook.com/enchufetv?fref=nf', 1, '2015-01-05 04:18:45'),
(19, 'Buenas Obras', 'Carolina', 'javier@gmail.com', 'https://www.facebook.com/krupsky.tandazo', 2, '2015-01-05 04:23:24'),
(20, 'Genial!!!', 'Visitante', 'correo@gmail.com', 'http://www.lawebdelprogramador.com/foros/PHP/43327-como-cargar-una-pagina-automaticamente-en-php.html', 2, '2015-01-05 04:24:34'),
(21, 'Adios!!', 'Final', 'adi@gmil.com', 'http://www.lawebdelprogramador.com/foros/PHP/43327-como-cargar-una-pagina-automaticamente-en-php.html', 2, '2015-01-05 04:25:17'),
(22, 'Me gusta', 'Final', 'ds@gmail.com', 'http://www.lawebdelprogramador.com/foros/PHP/43327-como-cargar-una-pagina-automaticamente-en-php.html', 7, '2015-01-05 04:27:48'),
(23, 'Este pintor, no tiene obras.', 'Alex', 'alex@gmail.com', 'https://www.facebook.com/alex.plascencia2', 6, '2015-01-05 04:34:26'),
(24, 'Listo', 'Alex', 'javer@hotmail.com', 'dasdasd.com', 3, '2015-01-05 13:39:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE IF NOT EXISTS `cuenta` (
`COD_CUENTA` int(11) NOT NULL,
  `USUARIO` varchar(256) DEFAULT NULL,
  `CONTRASENIA` varchar(40) DEFAULT NULL,
  `pasadmin` varchar(11) NOT NULL,
  `CORREO` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`COD_CUENTA`, `USUARIO`, `CONTRASENIA`, `pasadmin`, `CORREO`) VALUES
(1, 'admin', '', 'admin', 'javier_f.v@hotmail.com'),
(2, 'Javier', '1234', '', 'prueba@gmail.com'),
(7, 'Alex', '1234', '', 'alex2@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra`
--

CREATE TABLE IF NOT EXISTS `obra` (
`COD_OBRA` int(11) NOT NULL,
  `TITULO` varchar(50) DEFAULT NULL,
  `LOCACION` varchar(30) DEFAULT NULL,
  `ANIO_PUBLICACION` date DEFAULT NULL,
  `COD_PINTOR` int(11) NOT NULL,
  `MOVIMIENTO` varchar(30) DEFAULT NULL,
  `SRC` varchar(256) DEFAULT NULL,
  `VOTO` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `obra`
--

INSERT INTO `obra` (`COD_OBRA`, `TITULO`, `LOCACION`, `ANIO_PUBLICACION`, `COD_PINTOR`, `MOVIMIENTO`, `SRC`, `VOTO`) VALUES
(1, 'El toro de MORE', 'Guayaquil', '1976-01-01', 1, 'Signología Funcional', 'http://images.evisos.ec/2009/04/14/humberto-more_3f86201850_3.jpg', 0),
(2, 'El guitarrista', 'Quito', '1977-01-01', 2, 'Indigenista', 'http://4.bp.blogspot.com/-mSV_mxxAl4c/UUuBGDZaXRI/AAAAAAAAAB0/-XTiaIxK6uc/s1600/O+Guayasamin+2.jpg', 0),
(3, 'Meditación 2', 'Quito', '1974-01-01', 2, 'Indigenista', 'http://4.bp.blogspot.com/-NKEr2AeY5fk/UUuD8bzh6_I/AAAAAAAAAB8/qdHccUWSkGg/s1600/medita.jpg', 0),
(4, 'Obra en honor a sus amigos de infancia', 'Quito', NULL, 2, 'Indigenista', 'http://4.bp.blogspot.com/-YFbysO_LJSY/UUuIK4SKcXI/AAAAAAAAAC8/2cxA6n7_yhQ/s1600/AMIGOS.jpeg', 1),
(5, 'Autorretrato', 'Quito', NULL, 2, 'Indigenista', 'http://2.bp.blogspot.com/-MMIUGIPD7bQ/UUuFOJGDcOI/AAAAAAAAACE/ip-kDuAGMtg/s1600/autoret.jpg', 0),
(6, 'Lagrimas negras', 'Quito', NULL, 2, 'Indigenista', 'http://2.bp.blogspot.com/-CeIbwC2sm44/UUuGUOw3hKI/AAAAAAAAACM/S-dpIyk3vM0/s1600/lagrim.jpg', 0),
(7, 'niï¿½o negro', 'Quito', '1994-01-01', 2, 'Indigenista', 'http://2.bp.blogspot.com/-yfxUjmBYlt4/UUuGk2fUbpI/AAAAAAAAACU/9QZDJ83fnd8/s1600/nino.jpg', 0),
(8, 'homenaje a los mártires', 'Quito', '1965-01-01', 2, 'Indigenista', 'http://2.bp.blogspot.com/-iNJM7U8djTs/UUuG5RDDzkI/AAAAAAAAACc/TSf9W5Esc9c/s1600/edad.jpg', 0),
(9, 'El violinista', 'Quito', '1967-01-01', 2, 'Indigenista', 'http://4.bp.blogspot.com/-z-f-s69S6ac/UUuHIuLaBPI/AAAAAAAAACk/uLQwv6UBW6c/s1600/violinis.jpg', 0),
(10, 'Ternura', 'Quito', '1978-01-01', 2, 'Indigenista', 'http://4.bp.blogspot.com/-wOMnWpgXeHA/UUuHhxP7GgI/AAAAAAAAACs/dmXWfYq_Fpc/s1600/ternura.jpg', 0),
(11, 'Hojas de Yagruma', 'Quito', '1998-01-01', 2, 'Indigenista', 'http://1.bp.blogspot.com/--QC3xc9Ddis/UUuH6YCHMXI/AAAAAAAAAC0/1c2RhmZH_G8/s1600/hojas.jpg', 0),
(12, 'Mirada hacia el sur', 'Quito', '1981-01-01', 3, 'Expresionista', 'http://4.bp.blogspot.com/_5lW87R-7UfU/SkP2G5RPBiI/AAAAAAAAADs/dIFva5UxPUM/s320/manos+grandes.jpg', 2),
(13, 'FIn de fiesta', 'Quito', '1941-01-01', 3, 'Expresionista', 'http://1.bp.blogspot.com/_5lW87R-7UfU/SkPwEmA1nuI/AAAAAAAAADc/I7wQIxCoGa8/s320/fin+de+la+fiesta.jpg', 0),
(14, 'La hora oscura', 'Quito', '1965-01-01', 3, 'Expresionista', 'http://1.bp.blogspot.com/_5lW87R-7UfU/SkPm9vr5thI/AAAAAAAAADU/Is5ZLkKZi1k/s320/la+hora+obscura.jpg', 3),
(15, 'Mujeres y santos', 'Quito', '1946-07-22', 3, 'Expresionista', 'http://4.bp.blogspot.com/_5lW87R-7UfU/SkPhj5UXuUI/AAAAAAAAADM/ygBsxIvfr4Y/s320/mujeres+y+santos.jpg', 0),
(16, 'Los guandos', 'Quito', '1940-01-01', 3, 'Expresionista', 'http://2.bp.blogspot.com/_5lW87R-7UfU/SkPYKvzGhpI/AAAAAAAAAC0/XU5rkaoaFAA/s320/los+guandos.jpg', 0),
(17, 'Saco de papas', 'Quito', '1939-01-01', 3, 'Expresionista', 'http://2.bp.blogspot.com/_5lW87R-7UfU/SkOPZaQjQyI/AAAAAAAAACU/uE3Yo_eau8g/s320/Imagen1.png', 4),
(18, 'LLoviendo campanas', 'Quito', '0000-00-00', 5, 'Surrealista', 'http://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Lloviendo_Campanas.jpg/220px-Lloviendo_Campanas.jpg', 0),
(19, 'Desnudo', 'Quito', '2010-01-01', 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/ca0cf11bf5690b02c0c2b544bd40355c_XS.jpg', 0),
(20, 'Paisaje de Ambato', 'Quito', NULL, 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/97d1d3d17841d6d3353ed857f6573ac4_XS.jpg', 0),
(21, 'Yo busco la luna,la luna me busca a mí', 'Quito', NULL, 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/9fadb6d3e28e2be47da4c87e012c5962_XS.jpg', 0),
(22, 'La estrella morente la reina del cante y las estre', 'Quito', NULL, 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/6d00c12bde6a8ef539621cd606ac11ea_XS.jpg', 0),
(23, 'Flores', 'Quito', NULL, 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/949f13c1df30a468b76afab5b994011b_XS.jpg', 0),
(24, 'Sinfonia del nuevo mundo-dvorak', 'Quito', NULL, 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/d37b40f764b14a89e2058a44f05a96b6_XS.jpg', 0),
(25, 'Rosas con hojas de eucalipto', 'Quito', NULL, 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/f7644b56cd0ae537784e23b64857cf80_XS.jpg', 0),
(26, 'Lirio', 'Quito', NULL, 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/78afaacbba3bca41a1ce9f675afbba4f_XS.jpg', 0),
(27, 'boca del lobo', 'Quito', NULL, 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/43bbe23868902043e2660941f5e60894_XS.jpg', 0),
(28, 'Passaje Ambato', 'Quito', '1954-01-01', 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/a3193da9f744508278b55342b9cabd86_M.jpg', 0),
(29, 'Bodegón', 'Quito', '1955-01-01', 7, NULL, 'http://www.viteri.com.ec/media/k2/items/cache/afb2f0b609b92600310905cf1a1820fe_M.jpg', 0),
(30, 'Abstracto gestual', 'Quito', '1963-01-01', 7, 'Abstracto', 'http://www.viteri.com.ec/media/k2/items/cache/91a3fd8ae5d32ee912c8819cabab1e0b_M.jpg', 0),
(31, 'Autorretrato', 'Quito', '2012-01-01', 7, 'Retrato', 'http://www.viteri.com.ec/media/k2/items/cache/8d20793c9524220702360040c923d064_XS.jpg', 0),
(32, 'Dr. Cesar Viteri L.', 'Quito', '1984-01-01', 7, 'Retrato', 'http://www.viteri.com.ec/media/k2/items/cache/806b6e1806566ad52df50ee6cecd90ef_M.jpg', 0),
(33, 'Cuero Astral', 'Los rios', '2014-01-01', 8, 'Surrealismo', 'http://artelista.s3.amazonaws.com/obras/fichas/4/1/6/4770665024876837.jpg', 0),
(34, 'Modelo en su período', 'Los rios', '2014-01-01', 8, 'Desnudo', 'http://artelista.s3.amazonaws.com/obras/fichas/2/4/1/3868635722890620.jpg', 1),
(35, 'Mona lisa desnuda y sin sonrisa', 'Los rios', '2014-01-01', 8, 'Desnudo', 'http://artelista.s3.amazonaws.com/obras/fichas/3/0/2/5849920276959309.jpg', 0),
(36, 'Creada del color', 'Los rios', '2014-01-01', 8, 'Desnudo', 'http://artelista.s3.amazonaws.com/obras/fichas/5/9/4/1240114099312155.jpg', 0),
(37, 'Musa 2', 'Los rios', '2014-01-01', 8, 'Desnudo', 'http://artelista.s3.amazonaws.com/obras/fichas/7/6/6/9178584695281512.jpg', 0),
(38, 'Musa', 'Los rios', '2014-01-01', 8, 'Desnudo', 'http://artelista.s3.amazonaws.com/obras/fichas/7/3/0/2996154840765663.jpg', 0),
(39, 'Arbol mágico', 'Guayaquil', NULL, 9, 'Figurativo', 'http://1.bp.blogspot.com/-kybz7jg_2xg/ToPIsnd_vxI/AAAAAAAAAAM/YZkItHW3V6k/s320/IMG_0101.jpg', 0),
(40, 'Vivencia sobre pasalote', 'Guayaquil', NULL, 9, 'Geometrico', 'http://4.bp.blogspot.com/-uns5WbaqrtI/ToPJxF4evpI/AAAAAAAAAAQ/eiUrqHf6pIs/s320/IMG_0104.jpg', 0),
(41, 'Paralelas rojas', 'Guayaquil', NULL, 9, 'Geometrico', 'http://1.bp.blogspot.com/-C7UqYjSNunQ/ToPK5wU9oPI/AAAAAAAAAAU/yyqRZPOfJg8/s320/IMG_0117.jpg', 0),
(42, 'Autorretrato', 'Guayaquil', NULL, 9, 'Retrato', 'http://3.bp.blogspot.com/-gsgj6PMrGdU/ToPMR2_JWwI/AAAAAAAAAAY/-vH-qwIrO4Q/s320/IMG_0120.jpg', 0),
(43, 'Borracho', 'Guayaquil', NULL, 9, 'Retrato', 'http://1.bp.blogspot.com/-wgOT3t0KnGI/ToPNXM3FVyI/AAAAAAAAAAc/mvk0G3zDA5c/s320/IMG_0123.jpg', 0),
(44, 'Muro verde con collage', 'Guayaquil', NULL, 9, 'Surrealismo', 'http://2.bp.blogspot.com/-G0UTPvvUDfI/TnrnQN7tjXI/AAAAAAAAABM/EWCBUw-ctWA/s320/11.jpg', 0),
(45, 'Flores', 'Guayaquil', NULL, 9, 'Surrealismo', 'http://4.bp.blogspot.com/-EymUIdubZV4/TnrmT9xr5CI/AAAAAAAAAA8/0_EvnroUypc/s320/15.jpg', 0),
(46, 'Verde Vegetal', 'Guayaquil', NULL, 9, 'Surrealismo', 'http://2.bp.blogspot.com/-hdYW8xsQuv0/TnrmVnV9ptI/AAAAAAAAABA/CkmuYv8R7bk/s320/12.jpg', 0),
(47, 'Arbol milenario', 'Guayaquil', NULL, 9, 'Surrealismo', 'http://3.bp.blogspot.com/-n6HsK0d1pL0/TnrmZRRB94I/AAAAAAAAABI/eCpeEANg2Ho/s320/14.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obra_tecnica`
--

CREATE TABLE IF NOT EXISTS `obra_tecnica` (
  `COD_TECNICA` int(11) NOT NULL,
  `COD_OBRA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `obra_tecnica`
--

INSERT INTO `obra_tecnica` (`COD_TECNICA`, `COD_OBRA`) VALUES
(1, 1),
(2, 1),
(3, 3),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
(3, 24),
(3, 25),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 30),
(3, 31),
(3, 32),
(4, 33),
(4, 34),
(4, 35),
(4, 36),
(4, 37),
(4, 38),
(3, 40),
(3, 41),
(3, 42),
(3, 43),
(3, 44),
(3, 45),
(3, 46),
(3, 47);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pintor`
--

CREATE TABLE IF NOT EXISTS `pintor` (
`COD_PINTOR` int(11) NOT NULL,
  `NOMBRE` varchar(30) DEFAULT NULL,
  `FECHA_NAC` date DEFAULT NULL,
  `FECHA_DEF` date DEFAULT NULL,
  `LUGAR_ORIGEN` varchar(20) DEFAULT NULL,
  `IMG` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pintor`
--

INSERT INTO `pintor` (`COD_PINTOR`, `NOMBRE`, `FECHA_NAC`, `FECHA_DEF`, `LUGAR_ORIGEN`, `IMG`) VALUES
(1, 'Humberto Moré', '1929-01-01', '1984-01-01', 'Esmeraldas', 'http://www.enciclopediadelecuador.com/PaginaWeb/FotosChicas/More,_Humberto_(Aitoretrato).jpg'),
(2, 'Oswaldo Guayasamín', '1919-07-06', '1999-03-10', 'Quito', 'http://totheroots.files.wordpress.com/2009/03/oswaldo-guayasamin.jpg'),
(3, 'Eduardo Kingman', '1913-02-23', '1997-11-27', 'Loja', 'http://upload.wikimedia.org/wikipedia/en/4/47/Eduardo_Kingman.jpg'),
(4, 'Alejandro Elías', NULL, NULL, 'Guayaquil', 'http://static.classora.com/files/uploads/images/entries/2241353/main.jpg'),
(5, 'Gonzalo Endara', '1936-05-17', '1996-04-14', 'Quito', 'http://web.mnstate.edu/smithbe/GEC.jpg'),
(6, 'Camilo Egas', '1889-09-18', '1962-09-18', 'Quito', 'http://static.classora.com/files/uploads/images/entries/558884/main.jpg'),
(7, 'Oswaldo Viteri', '1931-09-18', NULL, 'Tungurahua', 'http://www.tedxlacarolina.com/wp-content/uploads/2012/07/osvaldo-_viteri3.jpg'),
(8, 'Jorge Vaca Ochoa', '1976-01-07', NULL, 'Guayaquil', 'http://expresiones.ec/media/ediciones//20140422/cultura/21042014_114246.jpg'),
(9, 'Enrique Tabara', '1930-01-07', NULL, 'Guayaquil', 'http://static.classora.com/files/uploads/images/entries/2217413/main.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premio`
--

CREATE TABLE IF NOT EXISTS `premio` (
`COD_PREMIO` int(11) NOT NULL,
  `PREMIO` varchar(60) DEFAULT NULL,
  `FECHA_ENTREGA` date DEFAULT NULL,
  `COD_PINTOR` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `premio`
--

INSERT INTO `premio` (`COD_PREMIO`, `PREMIO`, `FECHA_ENTREGA`, `COD_PINTOR`) VALUES
(1, 'Primer premio salón de julio', '1962-01-01', 1),
(2, 'segundo premio Mariano Aguilera', '1941-01-01', 2),
(3, 'Primer premio Mariano Aguilera', '1942-01-01', 2),
(4, 'primer premio Salón Nacional de Acuarelistas y Dibujantes', '1948-01-01', 2),
(5, 'primer gran premio III Bienal Hispanoamericana de Arte', '1955-01-01', 2),
(6, 'premio a "toda una vida de trabajo por la paz" UNESCO', '1957-01-01', 2),
(7, 'primer premio del quinto salón de Artes Plásticas', '1953-01-01', 3),
(8, ' primer premio Mariano Aguilera ', '1959-01-01', 3),
(9, ' medalla al mérito Artístico de la Municipalidad de Guayaqui', '1973-01-01', 3),
(10, ' condecoración Nacional al Mérito con el grado de Comendador', '1975-01-01', 3),
(11, '  Premio Especial Máquinas New Holland en categoría Profesio', '2014-09-22', 4),
(12, 'la Medalla de Plata del Premio Suizo de Pintura Naif Interna', '1982-01-01', 5),
(13, 'Primer Premio del Público en la Primera Bienal  de La Habana', '1984-01-01', 5),
(14, 'Primer Premio de Pintura en el Salón Mariano Aguilera; ', '1918-01-01', 6),
(15, 'premio Mariano Aguilera ; ', '1960-01-01', 7),
(16, 'Primer Premio salón Bolivariano ; ', '1961-01-01', 7),
(17, 'Mención Honorífica VI Bienal de Sao Pablo', '1961-01-01', 7),
(18, 'Cuarto Premio II Bienal Americana de Arte', '1964-01-01', 7),
(19, 'Cuarto Premio “I Bienal de Quito” ', '1968-01-01', 7),
(20, 'Primer Premio Salón Nacional Banco Central  ', '1977-01-01', 7),
(21, ' Premio Nacional de Arte Eugenio Espejo ', '1997-01-01', 7),
(22, ' Primer Premio en el Salón de Julio, de Guayaquil ', '1967-01-01', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnica`
--

CREATE TABLE IF NOT EXISTS `tecnica` (
`COD_TECNICA` int(11) NOT NULL,
  `TECNICA` varchar(60) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tecnica`
--

INSERT INTO `tecnica` (`COD_TECNICA`, `TECNICA`) VALUES
(1, 'Aerografía'),
(2, 'Tinta'),
(3, 'Oleo sobre tela'),
(4, 'Acrilico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
 ADD PRIMARY KEY (`COD_COMENTARIO`), ADD KEY `COD_PINTOR` (`COD_PINTOR`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
 ADD PRIMARY KEY (`COD_CUENTA`);

--
-- Indices de la tabla `obra`
--
ALTER TABLE `obra`
 ADD PRIMARY KEY (`COD_OBRA`), ADD KEY `COD_PINTOR` (`COD_PINTOR`);

--
-- Indices de la tabla `obra_tecnica`
--
ALTER TABLE `obra_tecnica`
 ADD KEY `COD_TECNICA` (`COD_TECNICA`), ADD KEY `COD_OBRA` (`COD_OBRA`);

--
-- Indices de la tabla `pintor`
--
ALTER TABLE `pintor`
 ADD PRIMARY KEY (`COD_PINTOR`);

--
-- Indices de la tabla `premio`
--
ALTER TABLE `premio`
 ADD PRIMARY KEY (`COD_PREMIO`), ADD KEY `COD_PINTOR` (`COD_PINTOR`);

--
-- Indices de la tabla `tecnica`
--
ALTER TABLE `tecnica`
 ADD PRIMARY KEY (`COD_TECNICA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
MODIFY `COD_COMENTARIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
MODIFY `COD_CUENTA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `obra`
--
ALTER TABLE `obra`
MODIFY `COD_OBRA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `pintor`
--
ALTER TABLE `pintor`
MODIFY `COD_PINTOR` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `premio`
--
ALTER TABLE `premio`
MODIFY `COD_PREMIO` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT de la tabla `tecnica`
--
ALTER TABLE `tecnica`
MODIFY `COD_TECNICA` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`COD_PINTOR`) REFERENCES `pintor` (`COD_PINTOR`);

--
-- Filtros para la tabla `obra`
--
ALTER TABLE `obra`
ADD CONSTRAINT `obra_ibfk_1` FOREIGN KEY (`COD_PINTOR`) REFERENCES `pintor` (`COD_PINTOR`);

--
-- Filtros para la tabla `obra_tecnica`
--
ALTER TABLE `obra_tecnica`
ADD CONSTRAINT `obra_tecnica_ibfk_1` FOREIGN KEY (`COD_TECNICA`) REFERENCES `tecnica` (`COD_TECNICA`),
ADD CONSTRAINT `obra_tecnica_ibfk_2` FOREIGN KEY (`COD_OBRA`) REFERENCES `obra` (`COD_OBRA`);

--
-- Filtros para la tabla `premio`
--
ALTER TABLE `premio`
ADD CONSTRAINT `premio_ibfk_1` FOREIGN KEY (`COD_PINTOR`) REFERENCES `pintor` (`COD_PINTOR`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
