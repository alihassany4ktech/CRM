-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 09:54 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l11` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l12` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l13` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l14` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l15` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l16` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l17` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l18` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l19` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l20` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l21` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l22` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l23` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l24` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l25` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l26` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l27` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l28` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l29` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l30` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l31` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l32` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l33` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l34` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l35` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l36` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l37` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l38` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l39` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l40` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l41` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l42` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l43` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l44` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l45` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l46` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l47` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l48` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l49` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l50` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l51` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l52` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l53` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l54` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l55` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l56` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l57` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l58` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l59` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l60` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l61` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l62` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l63` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l64` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l65` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l66` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l67` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l68` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l69` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l70` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l71` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l72` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l73` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l74` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l75` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l76` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l77` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l78` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l79` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l80` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l81` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l82` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l83` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l84` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l85` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l86` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l87` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l88` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l89` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l90` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l91` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l92` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l93` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l94` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l95` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l96` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l97` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l98` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l99` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l100` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l101` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l102` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l103` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l104` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l105` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l106` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l107` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l108` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l109` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l110` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l111` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l112` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l113` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l114` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l115` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l116` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l117` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l118` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l119` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l120` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l121` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l122` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l123` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l124` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l125` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l126` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l127` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l128` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l129` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l130` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l131` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l132` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l133` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l134` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l135` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l136` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l137` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l138` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l139` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l140` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l141` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l142` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l143` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l144` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l145` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l146` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l147` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l148` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l149` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l150` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l151` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l152` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l153` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l154` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l155` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l156` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l157` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l158` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l159` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l160` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l161` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l162` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l163` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l164` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l165` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l166` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l167` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l168` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l169` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l170` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l171` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l172` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l173` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l174` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l175` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l176` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l177` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l178` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l179` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l180` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l181` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l182` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l183` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l184` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l185` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l186` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l187` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l188` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l189` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l190` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l191` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l192` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l193` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l194` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l195` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l196` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l197` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l198` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l199` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l200` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l201` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l202` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l203` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l204` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l205` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l206` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l207` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l208` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l209` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l210` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l211` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l212` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l213` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l214` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l215` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l216` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l217` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l218` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l219` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l220` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l221` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l222` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l223` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l224` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l225` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l226` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l227` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l228` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l229` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l230` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l231` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l232` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l233` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l234` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l235` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l236` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l237` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l238` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l239` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l240` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l241` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l242` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l243` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l244` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l245` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l246` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l247` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l248` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l249` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l250` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l251` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l252` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l253` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l254` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l255` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l256` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l257` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l258` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l259` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l260` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l261` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l262` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l263` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l264` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l265` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l266` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l267` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l268` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l269` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l270` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l271` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l272` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l273` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l274` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l275` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l276` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l277` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l278` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l279` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l280` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l281` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l282` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l283` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l284` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l285` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l286` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l287` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l288` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l289` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l290` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l291` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l292` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l293` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l294` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l295` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l296` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l297` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l298` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l299` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l300` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l301` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l302` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l303` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l304` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l305` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l306` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l307` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l308` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l309` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l310` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l311` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l312` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l313` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l314` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `l315` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`, `l1`, `l2`, `l3`, `l4`, `l5`, `l6`, `l7`, `l8`, `l9`, `l10`, `l11`, `l12`, `l13`, `l14`, `l15`, `l16`, `l17`, `l18`, `l19`, `l20`, `l21`, `l22`, `l23`, `l24`, `l25`, `l26`, `l27`, `l28`, `l29`, `l30`, `l31`, `l32`, `l33`, `l34`, `l35`, `l36`, `l37`, `l38`, `l39`, `l40`, `l41`, `l42`, `l43`, `l44`, `l45`, `l46`, `l47`, `l48`, `l49`, `l50`, `l51`, `l52`, `l53`, `l54`, `l55`, `l56`, `l57`, `l58`, `l59`, `l60`, `l61`, `l62`, `l63`, `l64`, `l65`, `l66`, `l67`, `l68`, `l69`, `l70`, `l71`, `l72`, `l73`, `l74`, `l75`, `l76`, `l77`, `l78`, `l79`, `l80`, `l81`, `l82`, `l83`, `l84`, `l85`, `l86`, `l87`, `l88`, `l89`, `l90`, `l91`, `l92`, `l93`, `l94`, `l95`, `l96`, `l97`, `l98`, `l99`, `l100`, `l101`, `l102`, `l103`, `l104`, `l105`, `l106`, `l107`, `l108`, `l109`, `l110`, `l111`, `l112`, `l113`, `l114`, `l115`, `l116`, `l117`, `l118`, `l119`, `l120`, `l121`, `l122`, `l123`, `l124`, `l125`, `l126`, `l127`, `l128`, `l129`, `l130`, `l131`, `l132`, `l133`, `l134`, `l135`, `l136`, `l137`, `l138`, `l139`, `l140`, `l141`, `l142`, `l143`, `l144`, `l145`, `l146`, `l147`, `l148`, `l149`, `l150`, `l151`, `l152`, `l153`, `l154`, `l155`, `l156`, `l157`, `l158`, `l159`, `l160`, `l161`, `l162`, `l163`, `l164`, `l165`, `l166`, `l167`, `l168`, `l169`, `l170`, `l171`, `l172`, `l173`, `l174`, `l175`, `l176`, `l177`, `l178`, `l179`, `l180`, `l181`, `l182`, `l183`, `l184`, `l185`, `l186`, `l187`, `l188`, `l189`, `l190`, `l191`, `l192`, `l193`, `l194`, `l195`, `l196`, `l197`, `l198`, `l199`, `l200`, `l201`, `l202`, `l203`, `l204`, `l205`, `l206`, `l207`, `l208`, `l209`, `l210`, `l211`, `l212`, `l213`, `l214`, `l215`, `l216`, `l217`, `l218`, `l219`, `l220`, `l221`, `l222`, `l223`, `l224`, `l225`, `l226`, `l227`, `l228`, `l229`, `l230`, `l231`, `l232`, `l233`, `l234`, `l235`, `l236`, `l237`, `l238`, `l239`, `l240`, `l241`, `l242`, `l243`, `l244`, `l245`, `l246`, `l247`, `l248`, `l249`, `l250`, `l251`, `l252`, `l253`, `l254`, `l255`, `l256`, `l257`, `l258`, `l259`, `l260`, `l261`, `l262`, `l263`, `l264`, `l265`, `l266`, `l267`, `l268`, `l269`, `l270`, `l271`, `l272`, `l273`, `l274`, `l275`, `l276`, `l277`, `l278`, `l279`, `l280`, `l281`, `l282`, `l283`, `l284`, `l285`, `l286`, `l287`, `l288`, `l289`, `l290`, `l291`, `l292`, `l293`, `l294`, `l295`, `l296`, `l297`, `l298`, `l299`, `l300`, `l301`, `l302`, `l303`, `l304`, `l305`, `l306`, `l307`, `l308`, `l309`, `l310`, `l311`, `l312`, `l313`, `l314`, `l315`, `created_at`, `updated_at`) VALUES
(1, 'English', 'en', 'Find Your Dream Job', 'Search and find your dream job easily and quickly', 'Get Your Dream Job', 'Get Your Dream Job and start working in an new company', 'Join and Start Your Work', 'Start Working With Your Team in your new marketplace', 'Mploya Login', 'Login With Your Mploya', 'Job Seeker', 'Employer', 'Email', 'Password', 'Forgot Password', 'Login', 'With', 'Don\'t have an account', 'Sign Up', 'Welcome To', 'Full Name', 'Confirm Password', 'Sign Up', 'Enter your register email below to receive password reset instructions', 'Send', 'Email Not Found', 'Enter Otp Code', 'Enter the Otp Code that you received on your email', 'Verify', 'Check Your Email', 'We have send an password reset link on your email', 'OTP Not match Please try again', 'Home', 'Explore', 'Favourites', 'My Jobs', 'Job Requests', 'Profile', 'Subscription', 'Interviews', 'My Posted Jobs', 'Notifications', 'Interview Invites', 'Settings', 'Sign Out', 'Profile Progress', 'View Profile', 'Request Interview', 'Chat', 'Introduction video', 'About', 'Language', 'Skill', 'Education', 'Experience', 'Work', 'Candidate Profile', 'Reviews', 'No Reviews Found', 'Give Review', 'Profile', 'Edit profile', 'Completion Status', 'Profile Complete', 'Basic Information', 'Visible', 'Non Visible', 'Company Name', 'Address', 'Phone', 'Your', 'Link', 'Select Video', 'Candidate', 'Search Here', 'Description', 'Total Jobs', 'Notification Not Found', 'Please Purchase Subscription For Post Jobs', 'Name On Card', 'Card Number', 'Expiration', 'Month', 'Year', 'Pay Now', 'Successfully', 'You Have Successfully Purchased A Subscription', 'Active', 'Posted', 'Remain', 'Please Update Your Profile', 'Profile Update Successfully', 'Select Interview Time', 'Date', 'Time', 'Send', 'Close', 'Request', 'Interview Schedule Successfully', 'Invited', 'Re Schedule', 'Hire Now', 'Old', 'Top Categories', 'Popular Companies', 'Jobs', 'View All', 'Occupation', 'Add', 'Add Your Education', 'Is Continue', 'Start Date', 'End Date', 'Company Name', 'Company Address', 'Project Link', 'Optional', 'Status', 'Completed', 'Bookmarks Not Found', 'Filter', 'Clear', 'No', 'Seeker', 'Mploya', 'Apply for This Job', 'Occupation Not register', 'Applied', 'Save', 'Apply', 'Salary Type', 'Job Type', 'Salary Range', 'Delete', 'Edit', 'Please purchase subscription for post jobs', 'Password Update successfully', 'Something went wrong try again.', 'Create', 'Your new password must be different from previous used password', 'Please enter', 'Name', 'Password should be contain 8 digits at least', 'Password are not matched', 'New', 'Right', 'Modified On', 'Post Job', 'Enter Job Details', 'Available Vacancies', 'Please purchase subscription for post jobs', 'Please update your profile & For post job profile progress should be 70% or above', 'No job is remaining in your purchased subscription Please Purchase Subscription Or Renew it.', 'Select Sub Category', 'Select Category', 'Job Description', 'Msg', 'Job High Light', 'Industry Type', 'Functional Area', 'Role', 'Skills Required', 'Requirements', 'Info', 'Company', 'Web Site', 'Title', 'Please select start date', 'Please select end date', 'Time period not valid', 'Start and end date can\'t be same', 'Please enter company name', 'Please enter Role', 'Please enter valid link', 'Continue', 'Completed', 'Please enter job title', 'Please select salary type', 'Please select job type', 'Please enter role', 'Please enter education', 'Please enter  requirements', 'Please enter description', 'Please add 1 skill at least', 'Per Week', 'Per Month', 'Part Time', 'Full Time', 'Occupation Not Registered', 'All Categories', 'All Categories', 'Number', 'Vacancies', 'Developer', 'Salary', 'Not Linked Yet', 'Don\'t now how open this url :', 'This email already register as Jobseeker', 'This email already register as Employer', 'Please enter userName', 'OK', 'OTP', 'Jop Post Successfully', 'You can\'t select passed date\'s', 'Select Interview Time', 'Please Select Valid Date', 'Sorry! This Employer has not uploaded introduction video yet.', 'Sorry! This Seeker has not uploaded introduction video yet.', 'Update successfully', 'Job Update successfully', 'Jop Posted Successfully', 'Click + to', 'Already have an account?', 'Video File should not be greater then 2mb', 'Create Password', 'Thank You. for Subscription', 'Applied Successfully', 'Session Expire. Please Login Again ', 'Name on Card', 'Card Name', 'Card Number', 'Valid Card Number', 'CVC', 'e.g 415', 'Expiration Month', 'MM', 'Expiration Year', 'YYYY', 'Pay Now', 'Success', 'We received your purchase request we\'ll be in touch shortly!', 'Hello!', 'Interview Schedule Notification', 'Your Date', 'and Time', 'for interview', 'Good Luck!', 'Thank you for using our application!', 'Regards', 'Your Otp Code is', 'The introduction to the notification', 'User Not Found', 'Job Add Successfully', 'You Are Not Able To Post Job', 'Jobs Not Found', 'Job Delete Successfully', 'Job Status Change Successfully, and Now Current Status is Close', 'Job Status Change Successfully, and Now Current Status is Open', 'Profile Status Change Successfully and Now Current Status is Not Visible', 'Profile Status Change Successfully and Now Current Status is Visible', 'Jobseeker Not Found', 'Jobseeker Bookmark Successfully', 'Jobseeker UnBookmark Successfully', 'Profile Not Visible', 'You Are Not Able To Bookmark Employer', 'Popular Employer Not Found', 'You Are Not Able To Get Bookmark Jobseeker', 'Bookmarked Jobseeker Not Found', 'Interview Schedule Already', 'Interview Schedule Successfully and check your Email', 'You Are Not Able To Schedule', 'Popular Employers not Found', 'You Are Not Able To Get Popular Employers', 'Popular Jobseekers not Found', 'You Are Not Able To Get Popular Jobseeker', 'Popular Jobseeker  Not Found', 'You Can Add Only One Review', 'You Are Not Able To Add Review', 'Reviews Not Found', 'You Are Not Able To Get Reviews', 'Reviews Not Found', 'You Are Not Able To Get Reviews', 'Jobseekers not Found', 'Interview Reschedule Successfully and check your Email', 'You Hire This Person Successfully', 'You Already Hire This Person', 'You Are Not Able To Get All Subscriptions', 'Subscription Not Found', 'You Are Not Able To Purchase the Subscriptions', 'Pruchased Subscription Not Found', 'You Are Not Able To Get All Pruchased Subscription', 'You are Login as Different Account', 'Email Not Varified', 'Invalid Login Credentials', 'Name is Required', 'User Type is Required', 'Otp Send Successfully On Your Email', 'Your Otp Varify Successfull', 'Otp Not Match, Please Try Again', 'Email Not Found, Please Try Again', 'Your Account is Register But Not Social', 'Password Updated Successfully', 'Profile Updated Successfully', 'Employers Not Found', 'You already  Applied On This Job', 'You Are Not Able To Get Applied Jobs', 'Job Bookmark Successfully', 'Job UnBookmark Successfully', 'Job Are Closed', 'You Are Not Able To Bookmark Jobs', 'Bookmarked Jobs not Found', 'You Are Not Able To Get Bookmark Job', 'Bookmarked Job Not Found', 'Review Add Successfully', 'You Can Add Only One Review', 'You Are Not Able To Add Review', 'Only Company Employee Can Add Review', 'Right Review', 'no video found', 'Video File should not be greater then 2mb', 'Location', 'Schedule', 'Post Now', 'Some thing happened wrong', 'Your Review', 'Select Rating', 'No Chat Found', '2021-12-24 07:08:46', '2021-12-24 07:08:46'),
(2, 'Spanish', 'es', 'Encuentra el trabajo de tus sueños', 'Busque y encuentre el trabajo de sus sueños fácil y rápidamente', 'Consigue el trabajo de tus sueños', 'Obtenga el trabajo de sus sueños y comience a trabajar en una nueva empresa', 'Únase y comience su trabajo', 'Comience a trabajar con su equipo en su nuevo mercado', 'Mploya Iniciar sesión', 'Inicie sesión con su Mploya', 'Demandante de empleo', 'Empleadora', 'Correo electrónico', 'Contraseña', 'Has olvidado tu contraseña', 'Acceso', 'Con', 'No tengo una cuenta', 'Inscribirse', 'Bienvenida a', 'Nombre completo', 'Confirmar contraseña', 'Inscribirse', 'Ingrese su correo electrónico de registro a continuación para recibir instrucciones para restablecer la contraseña', 'Enviar', 'El correo electrónico no encontrado', 'Ingrese el código Otp', 'Ingrese el código Otp que recibió en su correo electrónico', 'Verificar', 'Consultar su correo electrónico', 'Hemos enviado un enlace para restablecer la contraseña en su correo electrónico.', 'OTP no coincide. Inténtelo de nuevo.', 'Casa', 'Explorar', 'Favoritas', 'Mis trabajos', 'Solicitudes de trabajo', 'Perfil', 'Suscripción', 'Entrevistas', 'Mis trabajos publicados', 'Notificaciones', 'Invitaciones para entrevistas', 'Aju stes', 'Desconectar', 'Progreso del perfil', 'Ver perfil', 'Solicitar entrevista', 'Chat', 'Video de introducción', 'Acerca de', 'Idioma', 'Habilidad', 'Educación', 'Experiencia', 'Trabajo', 'Perfil del candidato', 'Reseñas', 'No se encontraron comentarios', 'Dar revisión', 'Perfil', 'Editar perfil', 'Estado de finalización', 'Perfil completa', 'Información básica', 'Visible', 'no Visible', 'nombre de empresa', 'Habla a', 'Teléfono', 'Tu', 'Enlace', 'Seleccionar video', 'Candidata', 'Busca aquí', 'Descripción', 'Trabajos totales', 'Notificación no encontrada', 'Adquiera una suscripción para publicar trabajos', 'Nombre en la tarjeta', 'Número de tarjeta', 'Vencimiento', 'Mes', 'Año', 'Pagar ahora', 'Exitosamente', 'Ha comprado con éxito una suscripción', 'Activa', 'Al corriente', 'Permanecer', 'Actualiza tu perfil', 'Actualización de perfil con éxito', 'Seleccione la hora de la entrevista', 'fecha', 'hora', 'Enviar', 'Cerca', 'Solicitud', 'Programa de entrevistas con éxito', 'Invitada', 'Volver a programar', 'Contratar ahora', 'Vieja', 'Categorías principales', 'Compañías Populares', 'Trabajos', 'Ver todo', 'Ocupación', 'Agregar', 'Agregue su educación', 'Es continuar', 'Fecha de inicio', 'Fecha final', 'nombre de empresa', 'Dirección de la empresa', 'Enlace del proyecto', 'Opcional', 'Estado', 'Terminada', 'Marcadores no encontrados', 'Filtrar', 'Clara', 'No', 'Buscadora', 'Mploya', 'Aplica para este trabajo', 'Ocupación No registrarse', 'Aplicada', 'Ahorrar', 'Solicitar', 'Tipo de salario', 'El tipo de trabajo', 'Rango salarial', 'Borrar', 'Editar', 'Adquiera una suscripción para publicar trabajos', 'Actualización de contraseña con éxito', 'Algo salió mal, intenta de nuevo.', 'Crear', 'Su nueva contraseña debe ser diferente de la contraseña utilizada anteriormente', 'Por favor escribe', 'Nombre', 'La contraseña debe contener al menos 8 dígitos', 'Las contraseñas no coinciden', 'Nueva', 'Derecha', 'Modificado en', 'Trabajo posterior', 'Ingrese los detalles del trabajo', 'Vacantes disponibles', 'Adquiera una suscripción para publicar trabajos', 'Actualice su perfil y, para la publicación del trabajo, el progreso del perfil debe ser del 70% o superior', 'No queda ningún trabajo en la suscripción que compró. Compre la suscripción o renuévela.', 'Seleccionar subcategoría', 'selecciona una categoría', 'Descripción del trabajo', 'Msg', 'Trabajo High Light', 'Tipo de industria', 'área funcional', 'Papel', 'Habilidades requeridas', 'Requisitos', 'Información', 'Compañía', 'Sitio web', 'Título', 'Seleccione la fecha de inicio', 'Seleccione la fecha de finalización', 'Período de tiempo no válido', 'La fecha de inicio y finalización no puede ser la misma', 'Ingrese el nombre de la empresa', 'Por favor ingrese el rol', 'Ingrese un enlace válido', 'Continuar', 'Terminada', 'Ingrese el título del trabajo', 'Por favor ingrese Por favor seleccione el tipo de salario Título', 'Seleccione el tipo de trabajo', 'Por favor ingrese el rol', 'Por favor ingrese educación', 'Por favor ingrese los requisitos', 'Por favor ingrese una descripción', 'Agregue 1 habilidad al menos', 'Por semana', 'Por mes', 'Medio tiempo', 'Tiempo completo', 'Ocupación no registrada', 'todas las categorias', 'todas las categorias', 'Número', 'Vacantes', 'Desarrolladora', 'Salario', 'No vinculada todavía', 'No ahora cómo abrir esta url:', 'Este correo electrónico ya se registró como buscador de empleo', 'Este correo electrónico ya se registró como empleador', 'Por favor ingrese el nombre de usuario', 'OK', 'OTP', 'Publicación de Jop con éxito', 'No puede seleccionar fechas pasadas', 'Seleccione la hora de la entrevista', 'Seleccione una fecha válida', '¡Lo siento! Este empleador aún no ha subido un video de presentación.', '¡Lo siento! Este Buscador aún no ha subido un video de presentación.', 'Actualizar correctamente', 'Actualización de trabajo con éxito', 'La actualización de empleo Jop se publicó con éxito', 'Haga clic en + para', '¿Ya tienes una cuenta?', 'El archivo de video no debe ser superior a 2 MB', 'Crear contraseña', 'Gracias. para suscripción', 'Aplicado con éxito', 'Caducidad de la sesión. Por favor inicie sesión de nuevo', 'Nombre en la tarjeta', 'Nombre de tarjeta', 'Número de tarjeta', 'Número de tarjeta válida', 'CVC', 'p. ej. 415', 'mes de expiración', 'MM', 'Año de vencimiento', 'YYYY', 'Pagar ahora', 'Éxito', 'Recibimos su solicitud de compra y nos pondremos en contacto a la brevedad.', '¡Hola!', 'Notificación del programa de entrevistas', 'Tu fecha', 'y tiempo', 'para entrevista', '¡Buena suerte!', '¡Gracias por usar nuestra aplicación!', 'Saludos', 'Su código Otp es', 'La introducción a la notificación', 'Usuario no encontrada', 'Agregar trabajo exitosamente', 'No puedes publicar un trabajo', 'Trabajos no encontrados', 'Trabajo eliminado correctamente', 'El estado del trabajo cambió con éxito y ahora el estado actual es Cerrar', 'El estado del trabajo cambió con éxito y ahora el estado actual es abierto', 'El estado del perfil cambió con éxito y ahora el estado actual no es visible', 'El estado del perfil cambió con éxito y ahora el estado actual es visible', 'Buscadora de empleo no encontrada', 'Marcador de búsqueda de empleo con éxito', 'Buscador de empleo Desmarcar correctamente', 'Perfil no visible', 'No puede marcar el empleador como favorito', 'Empleadora popular no encontrada', 'No puede obtener marcador de búsqueda de empleo', 'Buscador de empleo marcado como favorito no encontrado', 'Programa de entrevistas ya', 'Programa la entrevista con éxito y revisa tu correo electrónico', 'No puede programar', 'Empleadores populares no encontrados', 'No puede conseguir empleadores populares', 'Buscadoras de empleo populares no encontradas', 'No puede conseguir un   buscador   de empleo popular', 'Buscadora de empleo popular no encontrada', 'Puede agregar solo una reseña', 'No puede agregar una reseña', 'Reseñas no encontradas', 'No puedes recibir reseñas', 'Reseñas no encontradas', 'No puedes recibir reseñas', 'Buscadores de empleo no encontrados', 'Reprograme la entrevista correctamente y revise su correo electrónico', 'Contrata a esta persona con éxito', 'Ya contrataste a esta persona', 'No puede obtener todas las suscripciones', 'Suscripción no encontrada', 'No puede comprar las suscripciones', 'Suscripción comprada no encontrada', NULL, 'Estás iniciando sesión como una cuenta diferente', 'Correo electrónico no varificado', 'Credenciales de acceso invalidos', 'Se requiere el nombre', 'Se requiere el tipo de usuario', 'Otp enviar correctamente en su correo electrónico', 'Su Otp Varify con éxito', 'Su Otp Varify Otp no coincide, inténtelo de nuevo', 'Correo electrónico no encontrado, inténtelo de nuevo', 'Su cuenta es de registro pero no social', 'Contraseña actualizada exitosamente', 'Perfil actualizado con éxito', 'Empleadores no encontrados', 'Ya solicitó este trabajo', 'No puede obtener trabajos solicitados', 'Marcador de trabajo con éxito', 'Trabajo Deshacer marcador de trabajo con éxito', 'El trabajo está cerrado', 'No puede marcar trabajos', 'No se han encontrado los trabajos marcados como favoritos', 'No puede obtener un trabajo de marcador', 'Trabajo marcado como favorito no encontrado', 'exitosamente', 'Puede agregar solo una reseña', 'No puede agregar una reseña', 'Solo la empleada de la compañía puede agregar reseña', 'Revisión correcta', 'no se encontró ningún video', 'El archivo de video no debe ser superior a 2 MB', 'Ubicación', 'Calendario', 'Publicar ahora', 'Algo paso mal', 'Tu reseña', 'Seleccionar calificación', 'No se encontró ningún chat', '2021-12-25 03:50:25', '2021-12-25 03:50:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;