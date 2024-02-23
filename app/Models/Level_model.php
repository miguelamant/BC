<?php

namespace App\Models;

class Level_model
{
    //variables
    private $CISlevels;
    private $NONCISlevels;
    private $factors;


    private $positives;
    private $negatives;
    private $title;
    private $text;

    /**
     * @param $exercises
     */
    public function __construct(){
        //LEVEL 1
        $this->header_text = "Trading period";
        $this->positives = array('Little hassle for students', 'Price flexibility', 'No storage or financial risk', 'Little work');
        $this->negatives = array('Short hand-in period', 'Short buy period', 'Limited communication opportunities');
        $this->text = "During one day of the first week, sellers can bring their books to a room, and leave them there, specifying a price and an IBAN. Later that same day, buyers can choose and buy the books they want. Everything is supervised by a person from the student association. ";

        $this->ease = "30";
        $this->work = "20";
        $this->comm = "25";
        $this->secondhand = "20";

        $this->long1 = "During a period of time, you allow buyers and sellers to trade the books between themselves in a room. Because students don’t like to wait all day for a buyer to come, you work with a sticker system. The seller leaves its books in the room with a sticker on it, where you specify the price of the book, the bank account number and the mail address of the seller. Later that day or week buyers can come to the room, if any of the books they are looking for is available, they can buy it. To make sure everything gets paid properly, a person of the student association supervises everything.";
        $this->long2 = "All the books which are not sold by the end of the trade period can be picked up by the sellers again. We’ve learned from previous tryouts at Groep T, that, as the demand for second hand books is rather large, the amount of remaining books is rather small. ";
        $this->long3 = "";
        $this->handin1 = "Deciding the length of this trading period is up to the Cudi. It can vary between a few hours to several days. Obviously, the longer you make this period, the more accessible for students to hand in, and buy books using this system. The tradeoff is that you need a longer supervising period. ";
        $this->ease1 = "Same here, the longer the trading period the better. ";
        $this->ease2 = "Apart from the period, this system can be convenient for the students, if the amount of available books is sufficiently large. If, for example, a student can come to campus and buy three out of its five books second hand, he/she did a great deal, without spending too much time on it. The remaining books he/she can buy using the first hand system, while he/she is still on campus.";
        $this->commu1 = "Communication about the second hand system is the key to success. For this system, everything happens during the first week of the semester. This week is occupied with a lot of activities, arranging ISP and your residence, and few people check their mails or go to campus these days. This reduces the possibilities of communicating about the system, and is therefore the main drawback of this system.";
        $this->commu2 = "In order to have a successful second hand system, you need a sort of campaign of several days prior to collecting books. Unfortunately, this is not possible during the first week.";
        $this->price1 = "The basic laws of offer and demand apply here, as the students can set the prices of books themselves, the Cudi’s don’t have to bother about this. ";
        $this->filter1 = "No filtering is required. All books can be handed in. Books in a bad state will simply be worth less. Because of the price flexibility, students can compensate for this by selling it at a lower price. ";
        $this->storage1 = "There is no storage required. All books are kept in the room until the trade period is over. If your period is longer than one day and the room cannot be locked, a small storage room is required.";
        $this->trans1 = "The buyer transfers the money to the IBAN of the seller. The Cudi is not a financial intermediary, so no transaction hassle involved in this system.";
        $this->commission1 = "As the Cudi is not the financial intermediary, no commission can be charged.";
        $this->risk1 = "The Cudi does not buy any books from the students, so no financial risks involved.";

        $this->remark1 = "";

        $this->factors = array("long1"=>$this->long1, "long2"=>$this->long2,"long3"=>$this->long3,"handin1"=>$this->handin1,"ease1"=>$this->ease1,"ease2"=>$this->ease2,"commu1"=>$this->commu1,
            "commu2"=>$this->commu2,"price1"=>$this->price1,"filter1"=>$this->filter1,"storage1"=>$this->storage1,"trans1"=>$this->trans1,"commission1"=>$this->commission1,"risk1"=>$this->risk1,"remark1"=>$this->remark1);



        $this->level1 = array("positives"=>$this->positives,"negatives"=>$this->negatives, "header_text"=>$this->header_text, "text"=>$this->text
        ,"secondhand"=>$this->secondhand, "work"=>$this->work, "comm"=>$this->comm, "ease"=>$this->ease,"factors"=>$this->factors);

        //LEVEL 2
        $this->header_text = "Letter box";
        $this->positives = array('Long hand-in period', 'More communication opportunities','Little hassle for students', 'Price flexibility');
        $this->negatives = array('Storage required','A bit more work than one trading day', 'Short buy period');
        $this->text = "In this level you collect all the second hand books one semester prior to the sale. Once collected, you store them until the first week of the semester. During this week you present all the books in a room, and wait for buyers to come. If you want to buy a book, you pay the amount asked for, to the IBAN on the sticker. ";

        $this->ease = "50";
        $this->work = "35";
        $this->comm = "100";
        $this->secondhand = "40";

        $this->long1 = "In level this you collect all the second hand books one semester prior to the sale. This is done during a period of time (e.g. one week) where sellers can leave their books at a certain place or drop it in a letter box. Similar to the trading period, they put a sticker on it, with the price, the bank account number and their mail. ";
        $this->long2 = "You can also work with a form that needs to be submitted by sellers for each book. The form returns a unique code which you can write on the sticker. In the form, you ask the name of the book, the edition, the price, the IBAN, mail, and some more things if you want to. Doing so allows you to keep a record of which books you have in stock and makes sure the IBAN is readable. Knowing the books in stock can be used in convincing the students to come to the room, by assuring them the book they need is available. ";
        $this->long3 = "Selling the books is the same as in the trade period. When working with a form, you have to look up the IBAN number in the excel file, using the unique code as the reference key. ";
        $this->handin1 = "Again, this is determined by the Cudis, but as you do it during the semester, you have more possibilities. You can for example make a letter box where students can drop their books, or let students hand in the books during a period of several days in a room. In short, there are more and better opportunities.";
        $this->ease1 = "Because all the books are collected a semester before, you have all books by the start of your selling days. This increases the chance for students that the books they need will be available, and therefore makes it easier for them to buy second hand. ";
        $this->ease2 = "Also, you can keep an online list of all second hand books which are in stock. A simple shared excel can be sufficient. This way you can assure students that the book they want is available. ";
        $this->commu1 = "As mentioned earlier, communication is key in convincing the students to hand-in their books. Ideally, you do a sort of campaign where you try to convince students using different channels. You can use social media, banners, mails, promo-video’s, ask professors to persuade students, etc. All of these would work less effectively if you do it the first week of the semester. ";
        $this->commu2 = "";
        $this->price1 = "The basic laws of offer and demand apply here, as the students can set the prices of books themselves, the Cudi’s don’t have to bother about this. ";
        $this->filter1 = "No filtering is required. All books can be handed in. Books in a bad state will simply be worth less. Because of the price flexibility, students can compensate for this by selling it at a lower price. ";
        $this->storage1 = "The books need to be stored between the two semesters. The room can be different from the first hand storage. If you have a lack of storing capacity, the KUL might help you with this.";
        $this->trans1 = "The buyer transfers the money to the IBAN of the seller. The Cudi is not a financial intermediary, so no transaction hassle involved in this system.";
        $this->commission1 = "As the Cudi is not the financial intermediary, no commission can be charged.";
        $this->risk1 = "The Cudi does not buy any books from the students, so no financial risks involved.";

        $this->remark1 = "*This is the system we recommend to use! It involves no risk or financial investments and it takes away most hassle for students";

        $this->factors = array("long1"=>$this->long1, "long2"=>$this->long2,"long3"=>$this->long3,"handin1"=>$this->handin1,"ease1"=>$this->ease1,"ease2"=>$this->ease2,"commu1"=>$this->commu1,
            "commu2"=>$this->commu2,"price1"=>$this->price1,"filter1"=>$this->filter1,"storage1"=>$this->storage1,"trans1"=>$this->trans1,"commission1"=>$this->commission1,"risk1"=>$this->risk1,"remark1"=>$this->remark1);



        $this->level2 = array("positives"=>$this->positives,"negatives"=>$this->negatives, "header_text"=>$this->header_text, "text"=>$this->text
        ,"secondhand"=>$this->secondhand, "work"=>$this->work, "comm"=>$this->comm, "ease"=>$this->ease,"factors"=>$this->factors);

        //LEVEL 3
        $this->header_text = "No risk site-incorporation";
        $this->positives = array('Long hand-in period', 'More communication opportunities','No hassle for students','Commission is possible');
        $this->negatives = array('Storage required','A lot of work', 'No price flexibility', 'Website rework required','Filter required');
        $this->text = "For this system the collection part is similar to level 2, the only difference is that you digitise the information of the seller using a simple form. 
The buying part is integrated in the first hand system, and therefore also in the site. By collecting all the data using the form, you now know your second hand stock. Students then have the option on the website to buy second hand books, if they are in stock. 
If you sell a book, the amount is paid to the seller, using your bank account as intermediary. 
";

        $this->ease = "70";
        $this->work = "80";
        $this->comm = "100";
        $this->secondhand = "55";

        $this->long1 = "Collecting the books happens one semester prior to selling. Students can hand in books during a certain period of time. The Cudi’s then check/fitler the books. All the bad books are refused.";
        $this->long2 = "Once collected, the second hand books are integrated in the first hand system, with for each second hand book an owner. Students buying books then have a “checkbox”-option on the website “to buy second hand books, if any available”. If a book is bought, the money is transferred to the owner. ";
        $this->long3 = "The main problems with this system are the complexity of the website and the automation of transactions to the owners. The main advantage is that the Cudi’s don’t have to take a financial risk and can charge a commission. ";
        $this->handin1 = "Again, this is determined by the Cudis, but as you do it during the semester, you have more possibilities. You can for example make a letter box where students can drop their books, or let students hand in the books during a period of several days in a room. In short, there are more and better opportunities.";
        $this->ease1 = "As easy and efficient as the first hand system. Because the system is completely integrated in the first hand system, there is no difference in effort for a student to get its books compared to the first hand system.";
        $this->ease2 = "";
        $this->commu1 = "Communication is key in convincing the students to hand-in their books. Ideally, you do a sort of campaign where you try to convince students using different channels. You can use social media, banners, mails, promo-video’s, ask professors to persuade students, etc. All of these would work less effectively if you do it the first week of the semester. ";
        $this->commu2 = "";
        $this->price1 = "The Cudi determines a fixed price for each book, meaning students cannot negotiate between themselves about a price. This is inconvenient, because it means that a book in a good shape will have the same price as one in a bad shape. ";
        $this->price2 = "A solution to this could be to set different price-levels for one type of book. For example, bad, decent and good state, for €20, €35 and €50 euro respectively. ";
        $this->filter1 = "The Cudi will have to filter the books. If a student wants to sell his/her books to the Cudi, but it is in such a bad state, then they will have to refuse. This is good for the students, as only decent books are used in the system. The bad part is that it requires extra work from the Cudi.";
        $this->storage1 = "Storage is required. The exact size of the storage room depends on the amount of books collected.";
        $this->trans1 = "This system requires automated transactions to sellers and from buyers. Implementing such systems in your website is expensive. ";
        $this->commission1 = "The Cudi can charge a commission to compensate for expenses. ";
        $this->risk1 = "The Cudi does not buy any books from the students, so no financial risks involved.";

        $this->remark1 = "*<b>Remark:</b> We explain this system just to be complete, but as it requires a complex website, it will be too expensive to implement it. So we do not recommend using this system!";

        $this->factors = array("long1"=>$this->long1, "long2"=>$this->long2,"long3"=>$this->long3,"handin1"=>$this->handin1,"ease1"=>$this->ease1,"ease2"=>$this->ease2,"commu1"=>$this->commu1,
            "commu2"=>$this->commu2,"price1"=>$this->price1,"price2"=>$this->price2,"filter1"=>$this->filter1,"storage1"=>$this->storage1,"trans1"=>$this->trans1,"commission1"=>$this->commission1,"risk1"=>$this->risk1,"remark1"=>$this->remark1);

        $this->level3 = array("positives"=>$this->positives,"negatives"=>$this->negatives, "header_text"=>$this->header_text, "text"=>$this->text
        ,"secondhand"=>$this->secondhand, "work"=>$this->work, "comm"=>$this->comm, "ease"=>$this->ease, "factors"=>$this->factors);

        //LEVEL 4
        $this->header_text = "Risk site-incorporation";
        $this->positives = array('Students get their money straight away', 'Long hand-in period', 'More communication opportunities','Commission is possible');
        $this->negatives = array('Financial risk','Storage required','A lot of work', 'No price flexibility', 'Website rework required');
        $this->text = "The same as level 3, with the difference that now the student associations buy the books. Increasing the financial risk and reducing the pay out hassle. 
";

        $this->ease = "100";
        $this->work = "100";
        $this->comm = "100";
        $this->secondhand = "70";

        $this->long1 = "Collecting the books happens one semester prior to selling. Students can hand in books during a certain period of time. The Cudi’s then checks/filters the books. All the bad books are refused. If the book is considered good enough, the Cudi buys it from the student. Which makes it more attractive for students to sell their books, as they get their money straight away. ";
        $this->long2 = "Once collected, the second hand books are integrated in the first hand system. Students buying books then have a “checkbox”-option on the website “to buy second hand books, if any available”.";
        $this->long3 = "The main problem with this system is that you take a financial risk as an organisation buying the books. Because this is too risky for student associations to do this, we suggest you cooperate with other organisations who are willing to take this risk, like Acco. This system is the best you can ever do with second hand, as it takes away all the hassle for the students. ";
        $this->handin1 = "Again, this is determined by the Cudis, but as you do it during the semester, you have more possibilities. You can for example make a letter box where students can drop their books, or let students hand in the books during a period of several days in a room. In short, there are more and better opportunities.";
        $this->handin2 = "Because you buy the books straight away from the students, it becomes more interesting for them to hand in their books. Meaning you can collect more books using this system. ";
        $this->ease1 = "As easy and efficient as the first hand system. Because the system is completely integrated in the first hand system, there is no difference in effort for a student to get its books compared to the first hand system. ";
        $this->ease2 = "";
        $this->commu1 = "Communication is key in convincing the students to hand-in their books. Ideally, you do a sort of campaign where you try to convince students using different channels. You can use social media, banners, mails, promo-video’s, ask professors to persuade students, etc. All of these would work less effectively if you do it the first week of the semester. ";
        $this->commu2 = "";
        $this->price1 = "The Cudi determines a fixed price for each book, meaning students cannot negotiate between themselves about a price. This is inconvenient, because it means that a book in a good shape will have the same price as one in a bad shape. ";
        $this->price2 = "A solution to this could be to set different price-levels for one type of book. For example, bad, decent and good state, for €20, €35 and €50 euro respectively.";
        $this->filter1 = "The Cudi will have to filter the books. If a student wants to sell his/her books to the Cudi, but it is in such a bad state, then they will have to refuse. This is good for the students, as only decent books are used in the system. The bad part is that it requires extra work from the Cudi.";
        $this->storage1 = "Storage is required. The exact size of the storage room depends on the amount of books collected.";
        $this->trans1 = "This system requires automated transactions to sellers and from buyers. Implementing such systems in your website is expensive.";
        $this->commission1 = "The Cudi can charge a commission to compensate for expenses.";
        $this->risk1 = "At this level, there is a high financial risk for the organisation buying the books. It is not guaranteed that every book, bought from students, will be resold. We therefore recommend to cooperate with an organisation with larger capital.";

        $this->remark1 = "*The Level 4 system would be great if it could be implemented, but for it to work, it needs a collaboration between the Cudi’s and an external organisation who can take the risk. We think that a similar system without the Cudi's help to collect and resell the books is not feasible. We support this system, but only if both parties are willing to cooperate. ";

        $this->factors = array("long1"=>$this->long1, "long2"=>$this->long2,"long3"=>$this->long3,"handin1"=>$this->handin1,"handin2"=>$this->handin2,"ease1"=>$this->ease1,"ease2"=>$this->ease2,"commu1"=>$this->commu1,
            "commu2"=>$this->commu2,"price1"=>$this->price1,"price2"=>$this->price2,"filter1"=>$this->filter1,"storage1"=>$this->storage1,"trans1"=>$this->trans1,"commission1"=>$this->commission1,"risk1"=>$this->risk1,"remark1"=>$this->remark1);

        $this->level4 = array("positives"=>$this->positives,"negatives"=>$this->negatives, "header_text"=>$this->header_text, "text"=>$this->text
        ,"secondhand"=>$this->secondhand, "work"=>$this->work, "comm"=>$this->comm, "ease"=>$this->ease,"factors"=>$this->factors);




        //NON-cis
        //LEVEL 1
        $this->header_text = "Connect people via facebook";
        $this->positives = array("Little work for Cudi's" ,'Price flexibility', 'No storage or financial risk');
        $this->negatives = array('Hassle for students','Limited offer', 'Limited communication/persuasion opportunities');
        $this->text = "There is a group on facebook and people offer their own books for a certain price. Buyers can contact the seller themselves. Apart from making the facebook group and mediating the posts, the student associations do nothing.
This is a variant of a hand to hand system, where you use facebook to connect people.
";

        $this->ease = "10";
        $this->work = "5";
        $this->comm = "15";
        $this->secondhand = "5";

        $this->long1 = "There is a group on Facebook-group where people offer their own books for a certain price. Buyers can contact the seller themselves. Apart from making the facebook group and mediating the posts, the Cudis are not involved in this system.";
        $this->long2 = "As the amount of available books is limited, and the hassle of meeting up with several different persons is large, we think you cannot resell 7% of your books using this system. On current Facebook pages, the average is 3%.";
        $this->long3 = "";
        $this->handin1 = "The sellers make arrangements with the buyers themselves. There is no hand-in	period, as the sellers don’t hand their books in. They sell it immediately to the buyer. ";
        $this->ease1 = "In a facebook group it is quite difficult for the buyers to look for a specific book. Only if someone posts something he or she wants to sell, and it happens to be the book one is looking for, then it can be convenient. ";
        $this->ease2 = "";
        $this->commu1 = "It is possible to make a lot of advertisements for the group. However you exclude every student who doesn’t have facebook. Also it would probably better looking for the student association if they could make advertisements for their own website, instead of Facebook.";
        $this->commu2 = "";
        $this->price1 = "As a seller chooses his or her price and the buyer can make up for themselves if it	is a price they are willing to pay, the natural trade rules between buyer and seller remain maintained.";
        $this->filter1 = "There is no filtering of the books required. When someone's books are in such a bad state, nobody will buy them.";
        $this->storage1 = "There is no storage required.";
        $this->trans1 = "The students make arrangements for the transactions themselves. ";
        $this->commission1 = "No commission can be charged.";
        $this->risk1 = "There is no financial risk for the Cudi’s.";

        $this->remark1 = "This system is really convenient for the Cudi's, as they don't have to do any work for it. But as it is still a lot of hassle for the students to get the books, and the availability is limited, we think Facebook-groups have only limited potential.";

        $this->factors = array("long1"=>$this->long1, "long2"=>$this->long2,"long3"=>$this->long3,"handin1"=>$this->handin1,"ease1"=>$this->ease1,"ease2"=>$this->ease2,"commu1"=>$this->commu1,
            "commu2"=>$this->commu2,"price1"=>$this->price1,"filter1"=>$this->filter1,"storage1"=>$this->storage1,"trans1"=>$this->trans1,"commission1"=>$this->commission1,"risk1"=>$this->risk1,"remark1"=>$this->remark1);

        $this->Nlevel1 = array("positives"=>$this->positives,"negatives"=>$this->negatives, "header_text"=>$this->header_text, "text"=>$this->text
        ,"secondhand"=>$this->secondhand, "work"=>$this->work, "comm"=>$this->comm, "ease"=>$this->ease,"factors"=>$this->factors);

        //LEVEL 2
        $this->header_text = "Connect people via website (like VTK)";
        $this->positives = array('More books available', "Little work for Cudi's",'Price flexibility');
        $this->negatives = array('Hard to develop and maintain site','Hassle for students','Still rather limited offer', 'Limited communication/persuasion opportunities');
        $this->text = "The site offers an online 'location' where students can buy and sell books. The site brings the buyer and seller together, but they must make arrangements themselves about payment and transfer of the books. It is similar to the facebook group, but the way of connecting people is more convenient. It makes it easier to find the book you’re looking for. 
 ";

        $this->ease = "20";
        $this->work = "15";
        $this->comm = "15";
        $this->secondhand = "7";

        $this->long1 = "The website offers an online 'location' where students can buy and sell books. The website brings the buyer and seller together, but they must make arrangements themselves about payment and transfer of the books.";
        $this->long2 = "Similar to the facebook group, now the way of connecting people is more specific. Easier to find the book you’re looking for. ";
        $this->long3 = "";
        $this->handin1 = "The sellers make arrangements with the buyers themselves. There is no hand-in	period, as the sellers don’t hand their books in. They sell it immediately to the buyer. ";
        $this->ease1 = "With the list of books that are offered by students who want to sell, it is very easy to for the buyer to find what he or she is looking for. However the available books are rather limited and they still have to meet up with each other, which is quite a hassle.  ";
        $this->ease2 = "";
        $this->commu1 = "It is possible to make advertisements for this way of offering second hand books, which can be done using social media, banners, QR-codes, mails or asking professors to spread the message. ";
        $this->commu2 = "";
        $this->price1 = "As a seller chooses his or her price and a buyer can make up for him or herself if it is a price he or she is willing to pay, the natural trade rules between buyer and seller remain maintained.";
        $this->filter1 = "No filtering required. As the students can make up for themselves if it is worth it to buy or not.";
        $this->storage1 = "There is no storage required.";
        $this->trans1 = "The students make arrangements for the transactions themselves. ";
        $this->commission1 = "No commission can be charged.";
        $this->risk1 = "There is no financial risk for the Cudi’s.";

        $this->remark1 = "This system is really convenient for the Cudi's, as they don't have to do any work for it. But as it is still a lot of hassle for the students to get the books, and the availability is limited, we think Facebook-groups have only limited potential.";

        $this->factors = array("long1"=>$this->long1, "long2"=>$this->long2,"long3"=>$this->long3,"handin1"=>$this->handin1,"ease1"=>$this->ease1,"ease2"=>$this->ease2,"commu1"=>$this->commu1,
            "commu2"=>$this->commu2,"price1"=>$this->price1,"filter1"=>$this->filter1,"storage1"=>$this->storage1,"trans1"=>$this->trans1,"commission1"=>$this->commission1,"risk1"=>$this->risk1,"remark1"=>$this->remark1);


        $this->Nlevel2 = array("positives"=>$this->positives,"negatives"=>$this->negatives, "header_text"=>$this->header_text, "text"=>$this->text
        ,"secondhand"=>$this->secondhand, "work"=>$this->work, "comm"=>$this->comm, "ease"=>$this->ease,"factors"=>$this->factors);

        //LEVEL 3
        $this->header_text = "The Vinted of student books";
        $this->positives = array('Not too much hassle for students', "Little work for Cudi's",'Price flexibility', 'Commission is possible');
        $this->negatives = array('Expensive E-commerce website','Still rather limited offer', 'Limited persuasion opportunities');
        $this->text = "On the site there is an online 'location' where students buy and sell books. The site arranges the transfer of the money and books, so no need to meet up with several persons. Sellers still need to send the book using a mail service (e.g. Bpost). The organisation can charge a commission for hosting the website. 
";

        $this->ease = "25";
        $this->work = "40";
        $this->comm = "25";
        $this->secondhand = "12";

        $this->long1 = " On the website there is an online 'location' where students buy and sell books. The site arranges the transfer of the money and books, so no need to meet up with several persons. Sellers still need to send the book using a mail service. The organisation can charge a commission for hosting the website. ";
        $this->long2 = "";
        $this->long3 = "";
        $this->handin1 = "There is no hand-in period, as the students don’t have to hand-in their books. ";
        $this->ease1 = "Easy to buy. On the site, it is easy to look for a book in the list with offerings. The website arranges the transaction details, thus there is very little work for the buyer. The seller still has to send their books using a mail service and the availability of books can be limited too.  ";
        $this->ease2 = "";
        $this->commu1 = "It is possible to make advertisements for this way of offering second hand books, which can be done using social media, banners, QR-codes, mails or asking professors to spread the message. ";
        $this->commu2 = "";
        $this->price1 = "As a seller chooses his or her price and a buyer can make up for him or herself if it is a price he or she is willing to pay, the natural trade rules between buyer and seller remain maintained.";
        $this->filter1 = "No filtering is required. As the students don’t meet up in person, the buyers can only make a choice of buying or not, based on pictures and price. It could happen that the quality is not as it was advertised by the seller. To minimise such things, a review system could be incorporated. ";
        $this->storage1 = "There is no storage required.";
        $this->trans1 = "The buyer pays to the organisation hosting the website, and this organisation pays the seller. Automating this process is expensive. ";
        $this->commission1 = "As the organisation intervenes with the transaction, they could charge for commissions.";
        $this->risk1 = "There is no financial risk for the Cudi’s.";

        $this->remark1 = "";

        $this->factors = array("long1"=>$this->long1, "long2"=>$this->long2,"long3"=>$this->long3,"handin1"=>$this->handin1,"ease1"=>$this->ease1,"ease2"=>$this->ease2,"commu1"=>$this->commu1,
            "commu2"=>$this->commu2,"price1"=>$this->price1,"filter1"=>$this->filter1,"storage1"=>$this->storage1,"trans1"=>$this->trans1,"commission1"=>$this->commission1,"risk1"=>$this->risk1,"remark1"=>$this->remark1);

        $this->Nlevel3 = array("positives"=>$this->positives,"negatives"=>$this->negatives, "header_text"=>$this->header_text, "text"=>$this->text
        ,"secondhand"=>$this->secondhand, "work"=>$this->work, "comm"=>$this->comm, "ease"=>$this->ease,"factors"=>$this->factors);

        //LEVEL 4
        $this->header_text = "Online book store";
        $this->positives = array('Students get their money straight away', 'More books available', 'Commission is possible');
        $this->negatives = array('Financial risk','Storage required', 'No price flexibility', 'Expensive E-commerce website');
        $this->text = "The site buys books from the students and stores them somewhere. The books are offered online. If the books are purchased, the organisations send them to the buyer using a mail service. The organisation charges a commission to compensate for the losses and expenses of the website.  
";

        $this->ease = "50";
        $this->work = "60";
        $this->comm = "25";
        $this->secondhand = "30";

        $this->long1 = "The website buys books from the students and stores them somewhere. The books are offered online. If the books are purchased, the organisation sends them using a mail service, like Bpost. The organisation charges a commission to compensate for the losses and expenses of the website. ";
        $this->long2 = "This system is similar to the CIS Level 4, with the difference that there is no Cudi involved in collecting or selling books. Not having the Cudi as an intermediary will significantly reduce the accessibility for students to resell and buy their books second hand. Mainly the part of collecting and filtering is hard without Cudi or any other physical place the students are familiar with. ";
        $this->long3 = "";
        $this->handin1 = "This depends on the organisation hosting the website. The optimal way would be all year long, meaning the organisation buys books of the students whenever someone offers their books. The organisation could also opt for a week or several weeks of handing-in period. As this would mean less work for them.";
        $this->ease1 = "For the buyers, this level is rather easy. Students can look up the availability of a book on the online store, and order it. The hard part is collecting enough books so that the availability is large enough. If too few books are available, the willingness of students to use this online store will decrease. ";
        $this->ease2 = "";
        $this->commu1 = "Very easy to advertise this type of selling and buying the books, as the system is pretty straight forward for sellers and buyers. ";
        $this->commu2 = "";
        $this->price1 = "The organisation determines a fixed price for each book, meaning that students cannot negotiate between themselves about the price. This is inconvenient, because it means that a book in a good shape will have the same price as one in a bad shape. <br> A solution to this could be to set different price-levels for one type of book. For example, bad, decent and good state, for €20, €35 and €50 euro respectively. ";
        $this->filter1 = "The organisation will have to filter the books. If a student wants to sell his/her books to the organisation, but it is in such a bad state, then they will have to refuse. This is good for the students, as only decent books are used in the system. The bad part is that it requires extra work from the organisation.";
        $this->storage1 = "Storage is required. The exact size of the storage room depends on the amount of books collected. ";
        $this->trans1 = "This system requires automated transactions to sellers and from buyers. Implementing such systems in your website is expensive. ";
        $this->commission1 = "The organisation hosting the website can charge a commission to compensate for losses and expenses. ";
        $this->risk1 = "At this level, there is a high financial risk for the website host. It is not guaranteed that every book, bought from students, will be resold. ";

        $this->remark1 = "In our opinion, for this system to work, it needs to collaborate with Cudis to collect and sell its books, which is the Level 4 of Campus Involved Systems. So, we explain this system, but we think it is hard to make it profitable without any campus being involved.";

        $this->factors = array("long1"=>$this->long1, "long2"=>$this->long2,"long3"=>$this->long3,"handin1"=>$this->handin1,"ease1"=>$this->ease1,"ease2"=>$this->ease2,"commu1"=>$this->commu1,
            "commu2"=>$this->commu2,"price1"=>$this->price1,"filter1"=>$this->filter1,"storage1"=>$this->storage1,"trans1"=>$this->trans1,"commission1"=>$this->commission1,"risk1"=>$this->risk1,"remark1"=>$this->remark1);

        $this->Nlevel4 = array("positives"=>$this->positives,"negatives"=>$this->negatives, "header_text"=>$this->header_text, "text"=>$this->text
        ,"secondhand"=>$this->secondhand, "work"=>$this->work, "comm"=>$this->comm, "ease"=>$this->ease, "factors"=>$this->factors);



        $this->CISlevels = array($this->level1, $this->level2, $this->level3, $this->level4);
        $this->NONCISlevels = array($this->Nlevel1, $this->Nlevel2, $this->Nlevel3, $this->Nlevel4);

        $this->memorygames = array(
            array('memory_id' => '1', 'name'=> 'Colours', 'island' => '1', 'mandatory' => 'false', 'mistakes'=>'0', 'played' =>'0'),
            array('memory_id' => '2','name'=> 'Fingers', 'island' => '1', 'mandatory' => 'false', 'mistakes'=>'0', 'played' =>'0')
        );


    }


    public function getCISLevels()
    {
        return $this->CISlevels;
    }

    public function getNONCISLevels()
    {
        return $this->NONCISlevels;
    }

    public function factors(){
        return $this->factors;
    }
}