-- women
INSERT INTO `recommendation`(`name`, `description`, `imagePath`, `gender`, `event`, `season`, `style`, `brand`, `color`, `trends`) 
VALUES ("Sandale de piele întoarsă","Sandale fabricate din piele întoarsă, cu baretă cu fundă decorativă în față, cu baretă la călcâi și cu șnururi care se pot înfășura în jurul gleznelor, cu toc îmbrăcat.","imagini/Women/sandale.jpg","female","graduation","summer","modern","H&M","red","modern");

INSERT INTO `recommendation`(`name`, `description`, `imagePath`, `gender`, `event`, `season`, `style`, `brand`, `color`, `trends`) 
VALUES ("Sandale de piele","Sandale fabricate din piele, cu benzi înguste care se leagă în jurul gleznelor.","imagini/Women/sandale1.jpg","female","evening","summer","modern","H&M","brown","modern");

INSERT INTO `recommendation`(`name`, `description`, `imagePath`, `gender`, `event`, `season`, `style`, `brand`, `color`, `trends`) 
VALUES ("Sandale cu toc din vinil","Sandale cu toc. Culoare albă. Baretă din vinil transparent în partea din faţă şi în partea din spate. Toc mediu căptuşit. Vârf pătrat.","imagini/Women/sandale2.jpg","female","party","summer","modern","Zara","brown","modern");


-- men
INSERT INTO `recommendation`(`name`, `description`, `imagePath`, `gender`, `event`, `season`, `style`, `brand`, `color`, `trends`) 
VALUES ("Pantofi sport fără șireturi","Pantofi sport confecționat din pânză de bumbac, cu motiv de-a lungul tălpii, cu marginea de sus vătuită și cu inserții elastice pe laterale.","imagini/Men/sport.jpg","male","evening","summer","sport","H&M","black","modern");

INSERT INTO `recommendation`(`name`, `description`, `imagePath`, `gender`, `event`, `season`, `style`, `brand`, `color`, `trends`) 
VALUES ("Șlapi","Șlapi cu barete de cauciuc și cu talpă canelată de etilen vinil acetat.","imagini/Men/slapi.jpg","male","beach","summer","casual","H&M","green","modern");

INSERT INTO `recommendation`(`name`, `description`, `imagePath`, `gender`, `event`, `season`, `style`, `brand`, `color`, `trends`) 
VALUES ("Sandale cu barete multicolore","Sandale cu două barete. Exterior textil împletit, cu modele şi culori diferite. Formă clasică, cu talpă dublă. Închidere prin intermediul unei barete cu cataramă aurie în partea din spate.","imagini/Men/sandale.jpg","male","evening","summer","casual","Zara","black","modern");

-- children
INSERT INTO `recommendation`(`name`, `description`, `imagePath`, `gender`, `event`, `season`, `style`, `brand`, `color`, `trends`) 
VALUES ("Pantofi sport combinați","Pantofi sport cu construcţie tip şosetă. Combinaţie de materiale şi culori. Închidere prin intermediul unor şireturi ajustabile. Gaică în partea din spate, pentru o încălţare mai uşoară. Căptuşeală şi branţ din ţesătură. Talpă voluminoasă.","imagini/Children/sport.jpg","child","sport","spring","casual","Zara","pastel","modern");

INSERT INTO `recommendation`(`name`, `description`, `imagePath`, `gender`, `event`, `season`, `style`, `brand`, `color`, `trends`) 
VALUES ("Balerini cu fundiță","Balerini cu bombeu contrastant şi fundiţă decorativă. Căptuşeală şi branţ din ţesătură.","imagini/Children/balerini.jpg","child","party","summer","modern","Zara","beige","modern");




--de la Maria

ALTER TABLE `suggestions` CHANGE `description` `description` VARCHAR(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;

--women
--timeToDance
INSERT INTO suggestions (title,gender,description) VALUES('timeToDance','female','We want to look our best when we go clubbing and fabulous shoe styles will make you look good and feel great while dancing the night away. You may have to walk or run to the train to get there so you’ll be needing shoes that will let you experience the night without falling over or getting blisters. Keep scrolling on our list for stylish shoe style perfect for clubbing.If you’re not used to walking sky-high heels, you may go for kitten heeled shoes with 2 to 3 inches to give additional height to your stature while keeping you comfortable and giving you a great balance. You can have your pick from ankle strap sandals to peep toe shoes with kitten heels that can look great with ruffled dresses, asymmetrical dresses, shift dresses, pencil skirts and such. Kitten heels will still complement your outfit and show off your legs while keeping you secure on your feet.');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('timeToDance1','female','Kitten Heels','imagini/club1.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('timeToDance2','female','Wedges','imagini/club2.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('timeToDance3','female','Chunky Heels','imagini/club3.jpg');



--timeToTravel

INSERT INTO suggestions (title,gender,description) VALUES('timeToDance','female','Finding the right shoes for spring travel can be a bit confusing, especially when planning for cold and warm weather. Looking for the perfect travel shoe is sort of like shopping for a mattress. Everyone has different bodies, different preferences and finding the right balance for all is nearly imposible. However, one thing is for certain: travel shoes are not just about being functional but we`d love if they are also stylish, durable and versatile too. Here are three options to consider when packing shoes for spring travels.');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('timeToTravel1','female','Flats','imagini/flatss.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('timeToTravel2','female','Cotton shoes','imagini/coton.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('timeToTravel3','female','Boots','imagini/boots.jpg"');


--timeToSummer

INSERT INTO suggestions (title,gender,description) VALUES('summer','female','Summer is finally closer, so check out our Stylists`favorite warm weather outfit ideas! It`s time to break out the bright colors, bold patterns and strappy sandals.We`ve picked out how some of our favorite fashion girls have been rocking the strappy sandals, and after you see just how cool they make any outfit look, you`ll certainly want to purchase a pair (or two). ');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('summer1','female','Pair with a cute miniskirt for the ultimate `90s feel','imagini/outfit1.png');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('summer2','female','Socks and sandals? Counts us in','imagini/outfit2.png');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('summer3','female','A pair of strappy sandals will always look great with a maxi skirt','imagini/outfit3.png');


--men

--hunting 
INSERT INTO suggestions (title,gender,description) VALUES('hunting','male','The hunting season is near, so these boots along with hunting costumes.');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('hunting2','male','Camo Shoes','imagini/hunn.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('hunting1','male','Jacket','imagini/hun.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('hunting3','male','Camo Set','imagini/hunting2.jpg');

--summer
INSERT INTO suggestions (title,gender,description) VALUES('summerM','male','It`s never too early to start thinking about fresh new shoes for summer. In fact, looking toward lighter, brighter footwear can help propel you out of any cold-weather trudge you might otherwise find yourself in.Crafting the perfect warm-weather collection of footwear is also easier when you get started ahead of the season—stocking up on sandals and low-top sneakers now means you`ll be ready to hit the ground running (actually) come summer. From waterproof slides to espadrilles, here are the best shoes to get you through next summer in style.');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('summerM1','male','<h2>Havaianas</h2>
            <p>These come with a qualifier: They are to be worn at the beach or by
            the pool only. But in those two locations, it`s hard to beat a good
            pair of sandals.</p>
          ','imagini/summerMen.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('summerM2','male','<h2>Vans</h2>
          <p>
            If you want to fully embrace that laid-back spring vibe, go with a
            pair of sneakers worn by every California surfer and skater since
            the dawn of time (or since Vans first started making them).
          </p>','imagini/summerMen3.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('summerM3','male','  <h2>Birkenstock</h2>
          <p>
            More acceptable than flops: Birkenstocks. These are waterproof, so
            they`re a sure bet around water.
          </p>','imagini/summerMen2.jpg');

		  
		  
--run
INSERT INTO suggestions (title,gender,description) VALUES('sport','male','Whether you`re a routine marathon runner, or you simply
        enjoy the occasional light jog, there`s no denying that a gorgeous,
        sunny day can motivate just about anyone to get out there and pound the
        pavement.');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('sport1','male','Just do it','imagini/sport.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('sport2','male','Nike Run','imagini/sport2.jpg');
INSERT INTO suggestions(title,gender,description,imagePath) VALUES('sport3','male','Nike','imagini/sport3.jpg');
		  
		  
UPDATE `suggestions` SET `title` = 'timeToTravel' WHERE `suggestions`.`id_suggestion` = 41
UPDATE `suggestions` SET `description` = 'It`s never too early to start thinking about fresh new shoes for summer. In fact, looking toward lighter, brighter footwear can help propel you out of any cold-weather trudge you might otherwise find yourself in.Crafting the perfect warm-weather collection of footwear is also easier when you get started ahead of the season—stocking up on sandals and low-top sneakers now means you\'ll be ready to hit the ground\r\n running (actually) come summer. From waterproof slides to espadrilles, here are the best shoes to get you through next summer in style.' WHERE `suggestions`.`id_suggestion` = 53
UPDATE `suggestions` SET `description` = 'Finding the right shoes for spring travel can be a bit\r\n confusing, especially when planning for cold and warm weather. Looking\r\n for the perfect travel shoe is sort of like shopping for a mattress.\r\n Everyone has different bodies, different preferences and finding the\r\n right balance for all is nearly imposible. However, one thing is for\r\n certain: travel shoes are not just about being functional but we\'d love\r\n if they are also stylish, durable and versatile too. Here are three options to consider when packing shoes for spring travels.' WHERE `suggestions`.`id_suggestion` = 41;		  
UPDATE `suggestions` SET `imagePath` = 'imagini/boots.jpg' WHERE `suggestions`.`id_suggestion` = 44
	--pentru rating 
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('38','1','1','1','1','1');
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('39','1','1','1','1','1');
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('40','1','1','1','1','1');
	
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('42','1','1','1','1','1');
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('43','1','1','1','1','1');
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('44','1','1','1','1','1');
	
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('46','1','1','1','1','1');
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('47','1','1','1','1','1');
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('48','1','1','1','1','1');
	
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('50','0','0','0','0','0');
	
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('54','0','0','0','0','0');
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('55','0','0','0','0','0');
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('56','0','0','0','0','0');
	
	INSERT INTO ratings (id_suggestion,rating1,rating2,rating3,rating4,rating5) VALUES ('59','1','0','1','0','0');

	
	