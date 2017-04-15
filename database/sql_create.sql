DROP TABLE IF EXISTS city CASCADE;
DROP TABLE IF EXISTS country CASCADE;
DROP TABLE IF EXISTS location CASCADE;
DROP TABLE IF EXISTS message CASCADE;
DROP TABLE IF EXISTS "appUser" CASCADE;
DROP TABLE IF EXISTS "companyInfo" CASCADE;
DROP TABLE IF EXISTS "contactList" CASCADE;
DROP TABLE IF EXISTS "contactListUser" CASCADE;
DROP TABLE IF EXISTS doc CASCADE;
DROP TABLE IF EXISTS event CASCADE;
DROP TABLE IF EXISTS invitation CASCADE;
DROP TABLE IF EXISTS poll CASCADE;
DROP TABLE IF EXISTS "pollOption" CASCADE;
DROP TABLE IF EXISTS post CASCADE;
DROP TABLE IF EXISTS "postComment" CASCADE;
DROP TABLE IF EXISTS vote CASCADE;

DROP TYPE IF EXISTS "userType" CASCADE;
DROP TYPE IF EXISTS "eventType" CASCADE;

DROP INDEX IF EXISTS  "AppUser_pkey";
DROP INDEX IF EXISTS  "appUser_username_email_key";
DROP INDEX IF EXISTS  "City_pkey";
DROP INDEX IF EXISTS  "City_name_key";
DROP INDEX IF EXISTS  "CompanyInfo_pkey";
DROP INDEX IF EXISTS  "ContactListUser_pkey";
DROP INDEX IF EXISTS  "Country_name_key";
DROP INDEX IF EXISTS  "Country_pkey";
DROP INDEX IF EXISTS  "Doc_pkey";
DROP INDEX IF EXISTS  "Event_pkey";
DROP INDEX IF EXISTS  "Invitation_pkey";
DROP INDEX IF EXISTS  "Location_pkey";
DROP INDEX IF EXISTS  "Message_pkey";
DROP INDEX IF EXISTS  "Poll_pkey";
DROP INDEX IF EXISTS  "PollOption_pkey";
DROP INDEX IF EXISTS  "PostComment_pkey";
DROP INDEX IF EXISTS  "Vote_pkey";
DROP INDEX IF EXISTS  "eventDateIndex";
DROP INDEX IF EXISTS  "eventLocationIndex";
DROP INDEX IF EXISTS  "invitationAcceptedIndex";
DROP INDEX IF EXISTS  "eventPostIndex";
DROP INDEX IF EXISTS  "userVoteIndex";
DROP INDEX IF EXISTS  "usersMessagesIndex";
DROP INDEX IF EXISTS  "postCreatorIndex";
DROP INDEX IF EXISTS  "Event_name_idx";
DROP INDEX IF EXISTS  "Event_location_idx";
DROP INDEX IF EXISTS  "Full_name_idx";
DROP INDEX IF EXISTS  "Username_idx";
DROP INDEX IF EXISTS  "Email_idx";
DROP INDEX IF EXISTS  "Message_text_idx";
DROP INDEX IF EXISTS  "Post_text_idx";

CREATE TYPE "userType" AS ENUM ('Collaborator', 'Supervisor', 'Director');
CREATE TYPE "eventType" AS ENUM ('Meeting', 'Workshop', 'SocialGathering','Lecture/Conference','KickOff');

CREATE TABLE country (
    "idCountry" serial PRIMARY KEY NOT NULL,
    name text UNIQUE NOT NULL
);

CREATE TABLE city (
    "idCity" serial PRIMARY KEY NOT NULL,
    name text UNIQUE NOT NULL,
    "idCountry" integer NOT NULL REFERENCES country ON DELETE CASCADE
);

CREATE TABLE location (
    "idLocation" serial PRIMARY KEY NOT NULL,
    address text NOT NULL,
    "idCity" integer NOT NULL REFERENCES city ON DELETE CASCADE
);

CREATE TABLE "companyInfo" (
    "idInfo" serial PRIMARY KEY NOT NULL,
    department text NOT NULL,
    position text NOT NULL
);

CREATE TABLE "appUser" (
    "idUser" serial PRIMARY KEY NOT NULL,
    name text NOT NULL,
    username text UNIQUE NOT NULL,
    email text UNIQUE NOT NULL,
    password text NOT NULL,
    "idInfo" integer NOT NULL REFERENCES "companyInfo" ON DELETE CASCADE,
    user_type "userType" NOT NULL,
    CONSTRAINT password_length CHECK ((char_length(password) >= 8))
);

CREATE TABLE message (
    "idMessage" serial NOT NULL PRIMARY KEY,
    calendar_date date NOT NULL,
    message_text text NOT NULL,
    "idSender" integer NOT NULL REFERENCES "appUser" ON DELETE CASCADE,
    "idReceiver" integer NOT NULL REFERENCES "appUser" ON DELETE CASCADE
);

CREATE TABLE "contactList" (
    "idList" serial PRIMARY KEY NOT NULL,
    "idOwner" integer NOT NULL REFERENCES "appUser" ON DELETE CASCADE
);

CREATE TABLE "contactListUser" (
    "idContactList" integer NOT NULL,
	"idUser" integer NOT NULL,
	PRIMARY KEY("idContactList", "idUser")
);

CREATE TABLE event (
    "idEvent" serial PRIMARY KEY NOT NULL,
    name text NOT NULL,
    calendar_date date NOT NULL,
    calendar_time time without time zone NOT NULL,
    location text NOT NULL,
    "idLocation" integer NOT NULL REFERENCES location ON DELETE CASCADE,
    description text,
    "isPublic" boolean DEFAULT false NOT NULL,
    "idCreator" integer NOT NULL REFERENCES "appUser" ON DELETE CASCADE,
    event_type "eventType" NOT NULL,
    CONSTRAINT date_check CHECK ((calendar_date >= ('now'::text)::date))
);

CREATE TABLE post (
    "idPost" serial PRIMARY KEY NOT NULL,
    calendar_date date NOT NULL,
    calendar_time time without time zone NOT NULL,
    post_text text NOT NULL,
    "idCreator" integer NOT NULL REFERENCES "appUser" ON DELETE CASCADE,
    "idEvent" integer NOT NULL REFERENCES event ON DELETE CASCADE,
    CONSTRAINT date_check CHECK ((calendar_date >= ('now'::text)::date))
);

CREATE TABLE doc (
    "idDoc" serial PRIMARY KEY NOT NULL,
    name text NOT NULL,
    "idPost" integer NOT NULL REFERENCES post ON DELETE CASCADE,
    "idUser" integer NOT NULL REFERENCES "appUser" ON DELETE CASCADE,
    "idEvent" integer NOT NULL REFERENCES event ON DELETE CASCADE
);

CREATE TABLE invitation (
    "idEvent" integer NOT NULL,
    "idUser" integer NOT NULL,
    accepted boolean DEFAULT false NOT NULL,
    calendar_date date NOT NULL,
	PRIMARY KEY("idEvent", "idUser"),
    CONSTRAINT calendar_check CHECK ((calendar_date >= ('now'::text)::date))
);

CREATE TABLE poll (
    "idPoll" serial PRIMARY KEY NOT NULL,
    name text NOT NULL,
    "idPost" integer NOT NULL REFERENCES post ON DELETE CASCADE
);

CREATE TABLE "pollOption" (
    "idOption" serial PRIMARY KEY NOT NULL,
    name text NOT NULL,
    votes integer DEFAULT 0 NOT NULL,
    "idPoll" integer NOT NULL REFERENCES poll ON DELETE CASCADE
);

CREATE TABLE "postComment" (
    "idComment" serial PRIMARY KEY NOT NULL,
    comment_text text NOT NULL,
    "idCreator" integer NOT NULL REFERENCES "appUser" ON DELETE CASCADE,
    "idPost" integer NOT NULL REFERENCES post ON DELETE CASCADE
);

CREATE TABLE vote (
    "idUser" integer NOT NULL,
    "idPollOption" integer NOT NULL,
	PRIMARY KEY("idUser", "idPollOption")
);

--INDEXES
CREATE UNIQUE INDEX "AppUser_pkey" ON "appUser" USING btree ("idUser");
CREATE UNIQUE INDEX "appUser_username_email_key" ON "appUser" USING btree (username, email);
CREATE UNIQUE INDEX "City_pkey" ON city USING btree ("idCity");
CREATE UNIQUE INDEX "City_name_key" ON city USING btree (name);
CREATE UNIQUE INDEX "CompanyInfo_pkey" ON "companyInfo" USING btree ("idInfo");
CREATE UNIQUE INDEX "ContactListUser_pkey" ON "contactListUser" USING btree ("idContactList", "idUser");
CREATE UNIQUE INDEX "Country_name_key" ON country USING btree (name);
CREATE UNIQUE INDEX "Country_pkey" ON country USING btree ("idCountry");
CREATE UNIQUE INDEX "Doc_pkey" ON doc USING btree ("idDoc");
CREATE UNIQUE INDEX "Event_pkey" ON event USING btree ("idEvent");
CREATE UNIQUE INDEX "Invitation_pkey" ON invitation USING btree ("idEvent", "idUser");
CREATE UNIQUE INDEX "Location_pkey" ON location USING btree ("idLocation");
CREATE UNIQUE INDEX "Message_pkey" ON message USING btree ("idMessage");
CREATE UNIQUE INDEX "Poll_pkey" ON poll USING btree ("idPoll");
CREATE UNIQUE INDEX "PollOption_pkey" ON "pollOption" USING btree ("idOption");
CREATE UNIQUE INDEX "PostComment_pkey" ON "postComment" USING btree ("idComment");
CREATE UNIQUE INDEX "Vote_pkey" ON vote USING btree ("idUser", "idPollOption");

CREATE INDEX "eventDateIndex" ON event USING btree (calendar_date);
CREATE INDEX "eventLocationIndex" ON event USING btree ("idLocation");
CREATE INDEX "invitationAcceptedIndex" ON invitation USING btree (accepted);
CREATE INDEX "eventPostIndex" ON post USING btree ("idEvent");
CREATE INDEX "userVoteIndex" ON vote USING btree ("idUser");
CREATE INDEX "usersMessagesIndex" ON message USING btree ("idSender", "idReceiver");
CREATE INDEX "postCreatorIndex" ON post USING btree ("idCreator");

CREATE INDEX "Event_name_idx" ON event USING gin (to_tsvector('english', name)); 
CREATE INDEX "Event_location_idx" ON event USING gin (to_tsvector('english', location)); 

CREATE INDEX "Full_name_idx" ON "appUser" USING gin (to_tsvector('english', name)); 
CREATE INDEX "Username_idx" ON "appUser" USING gin (to_tsvector('english', username)); 
CREATE INDEX "Email_idx" ON "appUser" USING gin (to_tsvector('english', email)); 

CREATE INDEX "Message_text_idx" ON message USING gin (to_tsvector('english', message_text));
CREATE INDEX "Post_text_idx" ON post USING gin (to_tsvector('english', post_text)); 

--TRIGGERS
CREATE OR REPLACE FUNCTION inc_votes_func()
    RETURNS TRIGGER AS $$
DECLARE
	id_option int;
BEGIN
	id_option := TG_ARGV[0];

	UPDATE "pollOption"
	SET votes = votes + 1
	WHERE "idOption" = id_option;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER inc_votes
AFTER INSERT ON vote
EXECUTE PROCEDURE inc_votes_func(new_option);


CREATE OR REPLACE FUNCTION only_1_vote_func()
    RETURNS TRIGGER AS $$
DECLARE
	id_user int;
	id_poll_option int;
BEGIN
	id_user := TG_ARGV[0];
	id_poll_option := TG_ARGV[1];
	
    INSERT INTO user_votes (SELECT "idUser"
                    FROM vote
                    WHERE "idPollOption" = id_poll_option
                    AND "vote"."idUser" = "idUser");
	
	IF count(user_votes) == 1 THEN
		INSERT INTO vote ("idUser", "idPollOption") values (id_user, id_poll_option);
	END IF;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER only_1_vote
BEFORE INSERT ON vote
EXECUTE PROCEDURE only_1_vote_func(id_user, id_poll_option);

CREATE OR REPLACE FUNCTION non_invited_cant_post_func()
    RETURNS TRIGGER AS $$
BEGIN
    SELECT TG_ARGV[0] INTO id_e;
    SELECT TG_ARGV[1] INTO id_u;
    SELECT TG_ARGV[2] INTO calendar_d;
    SELECT TG_ARGV[3] INTO calendar_t;
    SELECT TG_ARGV[4] INTO post_t;
    SELECT TG_ARGV[5] INTO id_c;

    SELECT accepted
    FROM invitation, event
    WHERE invitation."idEvent" = id_e
    AND invitation."idUser" = id_u
    OR (event."idCreator" = id_u);

    IF accepted == true THEN
        INSERT INTO post (calendar_date, calendar_time, post_text, "idCreator", "idEvent") values (calendar_d, calendar_t, post_t, id_c, id_e);
    END IF;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER non_invited_cant_post
BEFORE INSERT ON post
EXECUTE PROCEDURE non_invited_cant_post_func(id_event, id_user, calendar_date, calendar_time, post_text, id_creator);

CREATE OR REPLACE FUNCTION user_event_creation_restrictions_func()
    RETURNS TRIGGER AS $$
BEGIN
    SELECT TG_ARGV[0] INTO id_u;
	SELECT TG_ARGV[1] INTO event_t;
	SELECT TG_ARGV[2] INTO event_n;
	SELECT TG_ARGV[3] INTO calendar_d;
	SELECT TG_ARGV[4] INTO calendar_t;
	SELECT TG_ARGV[5] INTO locat;
	SELECT TG_ARGV[6] INTO id_locat;
	SELECT TG_ARGV[7] INTO descr;
	SELECT TG_ARGV[8] INTO is_pub;

    SELECT user_type
    FROM "appUser"
    WHERE "idUser" = id_u;
    
    IF user_type == "Collaborator" THEN
        RETURN false;
    ELSEIF (user_type == "Supervisor" AND (event_t == "Meeting" || event_t == "Gathering" || event_t == "Workshop")) THEN      
        INSERT INTO event (name, calendar_date, calendar_time, location, "idLocation", description, "isPublic", "idCreator") values (event_n, calendar_d, calendar_t, locat, id_locat, descr, is_pub, id_u);
    ELSEIF user_type == "Director" THEN
        INSERT INTO event (name, calendar_date, calendar_time, location, "idLocation", description, "isPublic", "idCreator") values (event_n, calendar_d, calendar_t, locat, id_locat, descr, is_pub, id_u);
    END IF;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER user_event_creation_restrictions
BEFORE INSERT ON event
EXECUTE PROCEDURE user_event_creation_restrictions_func(id_user, event_type, event_name, calendar_date, calendar_time, location, id_location, description, is_public);