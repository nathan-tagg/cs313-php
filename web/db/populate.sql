-- In the beginning, there was nothing... Then, there was.. --
INSERT INTO SYSTEM_USER
( SELECT nextval('system_user_s1')
, 'Nathan');

-- Create the generic 'UNDEFINED' defining row in common_lookup --
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'ALL'
, 'UNDEFINED'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

-- Create the types of person(s) in common_lookup --

-- Spouse
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'PERSON'
, 'spouse'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

-- Family
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'PERSON'
, 'family'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

-- Friend
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'PERSON'
, 'friend'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

-- Co-worker
  INSERT INTO COMMON_LOOKUP
  ( SELECT nextval('common_lookup_s1')
  , 'PERSON'
  , 'co-worker'
  , (SELECT system_user_id
     FROM system_user
     WHERE system_user_name = 'Nathan'));

-- Create the types of telephone(s) in common_lookup --

-- Home
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'TELEPHONE'
, 'home'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

-- Cell
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'TELEPHONE'
, 'cell'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

-- Work
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'TELEPHONE'
, 'work'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

-- Create the types of address(es) in common_lookup --

-- Home
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'ADDRESS'
, 'home'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

-- Work
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'ADDRESS'
, 'work'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

--  Create the types of email(s) in common_lookup --

-- Personal
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'EMAIL'
, 'personal'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));

-- Work
INSERT INTO COMMON_LOOKUP
( SELECT nextval('common_lookup_s1')
, 'EMAIL'
, 'work'
, (SELECT system_user_id
   FROM system_user
   WHERE system_user_name = 'Nathan'));
