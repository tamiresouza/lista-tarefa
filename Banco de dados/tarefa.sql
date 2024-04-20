CREATE DATABASE IF NOT EXISTS `tarefa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tarefa`;

CREATE TABLE `categoria` (
  `id_cat` int(2) NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `categoria` (`id_cat`, `categoria`) VALUES
(1, 'Trabalho'),
(2, 'Estudo'),
(3, 'Escola'),
(4, 'Saúde');

CREATE TABLE `tarefas` (
  `id_tarefas` int(6) NOT NULL,
  `cod_categoria` int(2) NOT NULL,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `data_realiz` date NOT NULL,
  `hora_realiz` time NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

ALTER TABLE `tarefas`
  ADD PRIMARY KEY (`id_tarefas`),
  ADD KEY `cod_categoria` (`cod_categoria`);

ALTER TABLE `categoria`
  MODIFY `id_cat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `tarefas`
  MODIFY `id_tarefas` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

ALTER TABLE `tarefas`
  ADD CONSTRAINT `tarefas_ibfk_1` FOREIGN KEY (`cod_categoria`) REFERENCES `categoria` (`id_cat`);
COMMIT;

