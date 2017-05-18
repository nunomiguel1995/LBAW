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
DROP TABLE IF EXISTS notification CASCADE;

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
    subject text NOT NULL,
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
    "idPost" integer REFERENCES post ON DELETE CASCADE,
    "idUser" integer REFERENCES "appUser" ON DELETE CASCADE,
    "idEvent" integer REFERENCES event ON DELETE CASCADE
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

CREATE TABLE notification(
	"idNotification" serial PRIMARY KEY NOT NULL,
	"idUser" integer NOT NULL REFERENCES "appUser",
	photo boolean DEFAULT false,
	email boolean DEFAULT false,
	name boolean DEFAULT false
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


--TRIGGER
CREATE TRIGGER create_contact_list AFTER INSERT ON "appUser"
	BEGIN
		INSERT INTO "contactList" ("idOwner") VALUES (currval(pg_get_serial_sequence("appUser","idUser")));
	END;

CREATE OR REPLACE FUNCTION process_contact_list() RETURNS TRIGGER AS $contact_list$
    BEGIN
		INSERT INTO "contactList" ("idOwner") VALUES (currval('"appUser_idUser_seq"'::regclass)) ;
		RETURN NEW;
    END;
$contact_list$ LANGUAGE plpgsql;

CREATE TRIGGER contact_list
AFTER INSERT OR UPDATE OR DELETE ON "appUser"
    FOR EACH ROW EXECUTE PROCEDURE process_contact_list();
