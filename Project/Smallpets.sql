-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2013 at 05:52 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `Smallpets`
--

CREATE TABLE IF NOT EXISTS `Smallpets` (
  `Type` varchar(20) NOT NULL,
  `ImageUrl` varchar(300) NOT NULL,
  `ImageUrl2` varchar(300) NOT NULL,
  `Info` varchar(2000) NOT NULL,
  `Homecare` varchar(2000) NOT NULL,
  `Vetcare` varchar(2000) NOT NULL,
  `Illnesses` varchar(2000) NOT NULL,
  `Planning` varchar(2000) NOT NULL,
  PRIMARY KEY (`Type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Smallpets`
--

INSERT INTO `Smallpets` (`Type`, `ImageUrl`, `ImageUrl2`, `Info`, `Homecare`, `Vetcare`, `Illnesses`, `Planning`) VALUES
('Hamster', 'images/hamster.jpg', 'images/hamster2.jpg', 'Hamsters were first discovered in Syria, but they are native to many parts of the world. Although their downright cuteness makes them popular with prospective pet parents, these animals have some special requirements that must be met in order for them to be happy and healthy.', 'Your pet will do well on hamster mix, which contains seeds, grains, cracked corn and pellets, and is readily available at pet supply stores. Fresh, clean water should be available at all times. It is best to use an inverted bottle with a drinking tube, which should be changed daily. Don''t forget your housekeeping duties! Remove droppings, uneaten food and soiled bedding every day. Every week, remove and replace all the bedding, and scrub the bottom of the cage with hot, soapy water.', 'If you think your pet is sick, don''t delay- seek medical attention immediately. Common signs that something isn''t right with your hamster may include dull-looking eyes, matted fur, weight loss, shaking, runny nose and diarrhea. Also note that hamsters seem to be susceptible to respiratory problems, especially the common cold, which they can catch from their human pet parents.', 'Common illnesses for hamsters are abscesses on the skin, respiratory infections, wet tail, diarrhea, and various skin diseases. Please take your hamster to a vet for advise on how to help your little friend get better!', ' When you first get your pet, you''ll need to spend $20-35 for a cage. Food runs about $50 a year, plus $20 annually for toys and treats, and $220 each year for litter and bedding material.  The ASPCA recommends that you get your hamster from a responsible breeder or, better yet, adopt one from a shelter or small-animal rescue group. Call your local shelter and search on sites such as Petfinder.com for hammies in need of loving homes. '),
('Rabbit', 'images/rabbit.jpg', 'images/rabbit2.jpg', 'Domestic rabbits are delightful companion animals. They are inquisitive, intelligent, sociable and affectionate- and if well-cared for, indoor rabbits can live for seven to ten or more years. ', 'The most important component of your rabbit''s diet is grass hay, such as timothy or brome. This is crucial for keeping his intestinal tract healthy. Unlimited hay should be available at all times. You''ll also need to feed your bunny good-quality rabbit pellets. Pellets should be fresh and plain, without seeds, nuts or colored tidbits. Fresh leafy greens make up a third component of your pet''s diet. He''ll enjoy dark leaf lettuces, collard greens, turnip greens and carrot tops. Clean, fresh water, dispensed in a bottle or sturdy bowl, should be available at all times. Rabbits can be messy, so you''ll need to clean your pet''s cage once or twice weekly. Put your rabbit in a safe room or alternate cage as you sweep out the cage and scrub the floor with warm, soapy water. Brush your rabbit regularly with a soft brush to remove excess hair and keep his coat in good condition.', 'You should bring your pet to the vet for a check-up once a year. If your rabbit stops eating or moving his bowels for 12 hours or longer or has watery diarrhea, don''t wait- seek expert veterinary care immediately. Other signs of illness include runny nose and eyes, dark red urine, lethargy, fur loss and red, swollen skin. ', 'Common rabbit illnesses include diarrhea, coccidiosis, overgrown teeth, tear duct infection, and even heat stroke. If your rabbit doesn''t appear well, bring him to the vet ASAP.', 'Your rabbit needs a safe exercise area with ample room to run and jump, either indoors or out. Any outdoor area should be fully enclosed by a fence. '),
('Ferret', 'images/ferret.jpg', 'images/ferret2.jpg', 'People have shared their lives with pet ferrets for thousands of years. This small member of the weasel family endears itself to owners with its fun-loving personality and silly antics.', 'Many ferret owners choose to provide one ferret-proofed room that their ferret can roam freely, either all day or during playtime. A roomy cage is another great option. Many ferret owners keep their ferret in a roomy cage when it can''t be supervised, usually during the day when the owner is away, and the ferret has playtime for several hours during the day when the owner is around to supervise. Ferrets require a diet high in animal protein. Their digestive systems don''t absorb any nutrients from plants. Fat content should also be high. ', 'Like cats and dogs, ferrets can be vaccinated. A rabies vaccination is usually required by law in most areas of the United States. The differences in ferret health concerns and ferret treatments make it important for ferret owners to find a veterinarian who is knowledgeable about treating ferrets. ', 'Common ferret illnesses include adrenal gland disease, insulinoma, GI blockages, ECE, among others. Ferrets can also catch the flu from humans, so if your little friend appears to be sick, take him to the vet ASAP.', 'Be sure to plan where your ferret friend will be living in your home and pre-purchase any required food items, toys, a cage, and other things that your new friend may enjoy in his new home.'),
('Guinea Pig', 'images/guineapig.jpg', 'images/guineapig2.jpg', 'Guinea pigs are a member of the rodent family which were first discovered by the Spanish explorers when they arrived in the Andean region of Peru, South America back in the 1500''s.  The guinea pig was domesticated by local Indians beginning in circa 2000 BC.  In the wild guinea pigs lived in grasslands and took shelter in ground tunnels or caves. They lived in herds and ate mainly grasses. The Spanish explorers brought them back to Europe where they became a popular pet.', '<p>You should provide an unlimited quantity of fresh timothy hay every day to your guinea pig. Guinea pigs need continuous access to hay to aid their digestion and limit the growth of their teeth, because their teeth grow continuously throughout their lifetime. You should also provide bout 1/8 cup of pellets once a day.  Fresh vegetables can be offered  once a day. Leafy greens should comprise the bulk of your pig''''s fresh produce. Add carrots, zucchini and sweet potato once or twice a week. Fruit works well as an occasional treat. Introduce new fruits and veggies gradually to avoid diarrhea. Guniea pigs must consume 0.25ml of vitamin C each day; otherwise they can get really ill really quickly. You should get a liquid form of Vitamin C that doesn''''t need to be dissolved in water and which you can easily give to your pet via syringe. </p><p>Guinea pigs rely on floor space. Ramps and platforms at low heights provide variety, but guinea pigs need room to exercise, even with daily playtime outside of the cage. The larger the cage, the better it is for your pet. Buy bedding made from paper.  Provide enough bedding so that it is between 2-3 inches deep, so that absorption is maximized.</p><p>The ideal temperature range for guinea pigs is approximately 65-75 degrees Fahrenheit. Guinea pigs don''t do well under humid conditions. Dampness promotes the growth of mold in their hay and bedding and can make guinea pigs more prone to sickness.</p>', '<p>If you think your guinea pig is sick, don''t delay - seek medical attention immediately. Common signs that something isn''t right include sneezing, coughing, diarrhea, lethargy, and loss of appetite. Guinea pigs are also susceptible to external parasites such as mites and lice. If you think your pet is infested, head to the vet for treatment. Make sure you take your sick guinea pig only to the vet who knows how to treat small exotic pets.</p><p>Sometimes guinea pigs will stop eating when they are not feeling well.  This can become serious quickly due to their size and fast metabolic rate, guinea pigs that are not eating can go into gut stasis within hours, even with quick treatment this can often prove fatal.  Moving his food dish closer to his sleeping area will give him access to his food without having to go too far. As soon as you notice your guinea pig not eating or eating a lot less you need to start force feeding.  Force feeding can be very difficult at first, but once you get the hang of it is fairly easy.  To force feed a guinea pig you will need a feeding syringe, "slurry" or critical care, and a towel. Critical care is available through some veterinary clinics.  It is made by Oxbow and is formulated to feed the animal as well as build up strength, and keep the gut moving.  Force feeding is done in the same way as giving fluids.  Guinea pigs can easily aspirate food, which can be lethal. Therefore, be very careful when feeding you pet with the syringe. Put the syringe in the side of the mouth behind the front teeth, if you get it in the right place the guinea pig will start grinding his teeth on the syringe.  At this point you can slowly depress the plunger;   some guinea pigs will fight you a great deal.  This is where the towel comes in handy.  If you burrito wrap your guinea pig he won''t be able to fight you off as easily and may also find being wrapped to be somewhat calming.</p>', 'Common illnesses for guinea pigs are respiratory infections, lumps, mites, scurvy from vitamin C deficiency, diarrhea, and swollen footpads (when a cage has a hard floor or when the bedding is wet and unclean). If your pet develops first signs of illness, such as weakness, seak immadiate veterinary help.', 'When you first get your pet, you''ll need to spend about $35 for a cage. Food runs about $75 a year, plus $25 annually for toys and treats, $50 for an annual veterinary check-up and $400 per year for litter and bedding material. It would be wise of you to adopt your guinea pig from a shelter or small-animal rescue group.'),
('Chinchilla', 'images/chinchilla.jpg', 'images/chinchilla2.jpg', 'Chinchilla history is vague up to the time when the Spaniards traveled to South America in 1524. In South America the Spaniards encountered a tribe of Indians called "Chinchas" who introduced them to the little furry animals. The Spaniards named the little furry guys after the Indian tribe as "Chinchillas" - literally "Little Chinchas". Chinchillas can make wonderful pets for the right family. They are smart, inquisitive, and loving animals. They are active, vocal, and entertaining to watch. Since they can live up to 20 years they can be long time companions.', '<p>Chinchillas are vegetarians, have sensitive stomachs, and require specific foods to maintain their health. Commercial foods, made especially for chinchillas and produced in pellet form, are available in pet stores. Hay provides the roughage your chinchilla needs and is a very important part of his daily diet. It also can aid in wearing his ever growing teeth. Timothy or Alfalfa hay is a good choice. Your pet should always have a source of fresh water. Salt blocks or wheels are good for chinchillas. They can supply essential minerals that your pet may be lacking. You should give vitamin C 3-4 times a week and the dose should be about 100 mg for each chin. Thiamine should also be supplied; good quality hay and wheat germ meal would suffice.</p><p>Chinchillas are active and like to run, jump, and play. You should get the biggest cage possible which will allow them plenty of room for their antics. You want to avoid cages with wire floors since they can hurt a chinchilla''s feet. You should also avoid glass tanks due to poor ventilation.\r\nChinchillas are sensitive to heat, humidity, and drafts. Pelleted or shredded paper bedding is an great choice for a substrate. Hide areas are essential for your pet''s well being. These can be nest boxes, tunnels, or any other chew proof place where he can hide. Chinchillas are active and must have an exercise wheel in the cage. Chinchillas are very clean and have almost no body odor. They maintain their soft, plush fur by taking dust baths. Commercial dusting powders and bins are available for their baths. Place dusting powder in a bin and let your chinchilla take a dust bath at least twice a week. Pet toys are important to keep a chinchilla from getting bored and to help keep his teeth worn down. </p>', 'If you think your chinchilla is sick, don''t delay - seek medical attention immediately. Common signs that something isn''t right include sneezing, tiredness, rapid breathing, diarrhea, constipation, and loss of appetite. If your pets looks unwell, head to the vet for treatment. Make sure you take your sick chinchilla only to the vet who knows how to treat small exotic pets.</p>', 'Common chinchilla illnesses include respiratory infections, ringworm, ulcers, gastroenteritis, ear infections, broken boans, and bloat. If your pet develops first signs of illness, such as weakness, seak immadiate veterinary help.', 'The chinchilla itself can cost from $50 to $200, depending on the gender and breed. A simple cage costs around $50, but a multi-leveled one can be about $130. An igloo or little hiding place for the chinchilla along with some toys can be about $35. Water bottles and food bowls should be about $4 to $10 depending on quality. A dust bath bowl is about $20. Food each month can be up to $10, including snacks, alfalfa, and pellets. Vet check-ups depend on the vet.');