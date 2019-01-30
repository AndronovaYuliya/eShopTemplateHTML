--
-- Table structure for table `products_images`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE IF NOT EXISTS `products_images`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_galary` int(11) DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_spg_id_products_idx` (`id_product`),
  KEY `fk_spg_id_image_idx` (`id_galary`),
  CONSTRAINT `fk_spg_id_galary` FOREIGN KEY (`id_galary`) REFERENCES `images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_spg_id_product` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;
/*!40101 SET character_set_client = @saved_cs_client */;
