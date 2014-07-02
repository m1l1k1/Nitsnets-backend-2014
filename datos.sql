-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2014 a las 16:30:05
-- Versión del servidor: 5.5.33
-- Versión de PHP: 5.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `nitsnets`
--

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `nombre_en`, `nombre_de`) VALUES
(1, 'Moda', '', ''),
(2, 'Zapatos', '', ''),
(3, 'Accesorios', '', ''),
(4, 'Electrónica', '', ''),
(5, 'Informática', '', ''),
(6, 'Hogar', '', ''),
(7, 'Deportes', '', ''),
(8, 'Música', '', ''),
(9, 'Libros', '', ''),
(10, 'Juguetes', '', ''),
(11, 'prueba', '', '');

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`id`, `nombre`, `nombre_en`, `nombre_de`) VALUES
(1, 'Rojo', '', ''),
(2, 'Verde', '', ''),
(3, 'Azul', '', ''),
(4, 'Magenta', '', ''),
(5, 'Cian', '', ''),
(6, 'Amarillo', '', ''),
(7, 'Marron', '', ''),
(8, 'Violeta', '', ''),
(9, 'Naranja', '', ''),
(10, 'Blanco', '', ''),
(11, 'Negro', '', ''),
(12, 'Gris', '', ''),
(13, 'Rosa', '', '');

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `nombre_en`, `nombre_de`, `descripcion`, `descripcion_en`, `descripcion_de`, `precio`, `fk_categorias`) VALUES
(1, 'Disco Duro Portátil Seagate Expansionn', '', '', 'Añada más espacio de almacenamiento instantáneamente a su equipo y lleve sus archivos de gran tamaño a cualquier parte., La instalación es sencilla, solo tiene que conectar un cable USB y ya está listo. La unidad se alimenta a través del cable USB y no necesita una fuente de alimentación externa., Además, los sistemas operativos Windows reconocen las unidades automáticamente, por lo que no necesita instalar ningún tipo de software ni configurar ajuste alguno. El almacenamiento de archivos también es fácil, basta con arrastrar y soltar., Aproveche las vertiginosas velocidades de transferencia de datos con la interfaz USB 3.0 conectando con un puerto SuperSpeed USB 3.0. USB 3.0 es compatible con la versión anterior USB 2.0 para una mayor compatibilidad de sistemas.', '', '', 55.24, 5),
(2, 'Zapatillas Deportivas Niño Shechers', '', '', 'Zapatillas deportivas de material textil en color marrón con detalle de pespuntes y suela de goma en naranja.', '', '', 27.95, 2),
(4, 'Pala de pádel Inferno Elite Dunlop', 'Pala paddle Dunlop Elite Inferno', 'Pala paddle Dunlop Elite Inferno', 'Pala de pádel dirigida a un jugador Avanzado/Pro.', 'Pala paddle directed to Advanced / Pro player.', 'Pala Paddel, um Advanced / Pro Spieler gerichtet.', 94.5, 7),
(5, 'Trolley Samsonite Panayio', 'Samsonite Trolley Panayio', 'Samsonite Trolley Panayio', 'Trolley de 4 ruedas y capacidad de 66,5 litros y peso 3,2 kg.. Con cierre de seguridad TSA y asa superior y lateral.', '4 Wheel Trolley and capacity of 66.5 liters Weight 3.2 kg Lockable for security .. TSA and top and side handle.', '4 Wheel Trolley und Kapazität von 66,5 Liter Gewicht 3,2 kg Abschließbar .. TSA und Top-und Seitengriff .', 114, 3),
(13, 'Camisa de hombre Easy Wear', 'Easy Wear Shirt Man', 'Einfach Wear Shirt Man', 'Camisa de manga larga en color negro. Con canesú en la espalda y el bajo redondeado.', 'Long sleeve shirt in black color. With yoke on the back and rounded hem.', 'Langarm-Shirt in der Farbe schwarz. Mit Bügel auf der Rückseite und abgerundeten Saum.', 14.95, 1),
(14, 'Polo de hombre Green Coast', 'Polo Men Green Coast', 'Polo-Männer Grüne Küste', 'Polo de manga larga, con estampado de rayas horizontales en dos colores a contraste. Tiene cuello mao con cierre de tres botones y estampado en lado derecho.', 'Long sleeve polo with horizontal stripes pattern in two colors to contrast. It has mandarin collar with three-button closure and stamped on right side.', 'Langarm-Poloshirt mit horizontalen Streifen-Muster in zwei Farben zu kontrastieren. Es hat Stehkragen mit Dreiknopfverschluss und auf der rechten Seite eingeprägt.', 12.99, 1),
(15, 'Vestido Zendra El Corte Inglés', 'Dress Zendra El Corte Inglés', 'Kleid Zendra El Corte Inglés', 'Vestido de lino, corto. Con manga corta, escote redondo y cordones a tono para ajustar en la cintura.', 'Linen dress, Short. With short sleeves, round neckline and matching laces to adjust the waist.', 'Leinenkleid, Short. Mit kurzen Ärmeln, Rundhalsausschnitt und passende Schnürsenkel um die Taille anpassen.', 19.95, 1),
(16, 'Vaquero de mujer Pepe Jeans', 'Pepe Jeans Cowboy woman', 'Pepe Jeans Cowboy woman', 'Vaquero largo en color azul con efecto desgastado. Tiene cierre de doble botón y cremallera, trabillas en la cintura y cinco bolsillos.', 'Cowboy in blue along with worn effect. Has double button and zip closure, belt loops to the waist and five pockets.', 'Cowboy in blau zusammen mit abgenutzten Effekt. Hat Doppelknopf und Reißverschluss, Gürtelschlaufen an der Taille und fünf Taschen.', 90, 1),
(17, 'Zapatos planos de mujer Mustang', 'Mustang women flat shoes', 'Mustang Frauen flache Schuhe', 'Zapatos planos de material textil en color negro con trabajo de calados. Tienen cierre de cordones y suela de goma.', 'Flat shoes in black fabric with openwork work. They have laces and rubber sole.', 'Flache Schuhe in schwarzem Stoff mit durchbrochener Arbeit. Sie haben Schnürsenkeln und Gummisohle.', 19.99, 2);

--
-- Volcado de datos para la tabla `productos_colores`
--

INSERT INTO `productos_colores` (`fk_productos`, `fk_colores`) VALUES
(4, 1),
(13, 1),
(14, 2),
(15, 2),
(1, 3),
(4, 3),
(13, 3),
(14, 3),
(16, 3),
(1, 5),
(15, 5),
(15, 7),
(2, 10),
(13, 10),
(17, 10),
(5, 11),
(13, 11),
(16, 11),
(17, 11);

