CREATE DATABASE maquillaje;
USE maquillaje;

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_p` varchar(30) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `producto` (`id_producto`, `nombre_p`, `categoria`, `marca`, `precio`) VALUES
(500, 'MATE PHOTO FOCUS', 'ROSTRO', 'WET N WILD', 169),
(505, 'BLUSH LIQUIDO', 'ROSTRO', 'SINLESS BEAUTY', 149),
(506, 'THATS SO RAD', 'OJOS', 'BEAUTY CREATIONS', 265),
(507, 'LIP ATTRACTION', 'LABIOS', 'LA GIRL', 119),
(504, 'Iluminador Butter', 'MEJILLAS', 'PHYSICIANS FORMULA', 298),
(508, 'BROW SOAP', 'CEJAS', 'JLASH', 79);

ALTER TABLE `producto` 
  ADD PRIMARY KEY (`id_producto`);
COMMIT;