--
-- PostgreSQL database dump
--

-- Dumped from database version 12.9 (Ubuntu 12.9-0ubuntu0.20.04.1)
-- Dumped by pg_dump version 12.9 (Ubuntu 12.9-0ubuntu0.20.04.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: tbladmin; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tbladmin (
    adid integer NOT NULL,
    adname character varying(25),
    adcon bigint,
    ademail character varying(20),
    adgen character varying(6),
    adpass character varying(10)
);


ALTER TABLE public.tbladmin OWNER TO postgres;

--
-- Name: tbladmin_adid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tbladmin_adid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tbladmin_adid_seq OWNER TO postgres;

--
-- Name: tbladmin_adid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tbladmin_adid_seq OWNED BY public.tbladmin.adid;


--
-- Name: tblanulpkg; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblanulpkg (
    pkgid integer NOT NULL,
    pkgname character varying(50),
    pkgnos integer,
    pkgdesc text,
    pkgprice numeric
);


ALTER TABLE public.tblanulpkg OWNER TO postgres;

--
-- Name: COLUMN tblanulpkg.pkgnos; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON COLUMN public.tblanulpkg.pkgnos IS 'number of services';


--
-- Name: tblanulpkg_pkgid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblanulpkg_pkgid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblanulpkg_pkgid_seq OWNER TO postgres;

--
-- Name: tblanulpkg_pkgid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblanulpkg_pkgid_seq OWNED BY public.tblanulpkg.pkgid;


--
-- Name: tblbill; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblbill (
    bid integer NOT NULL,
    cid integer,
    ac numeric(10,2),
    pdesc text
);


ALTER TABLE public.tblbill OWNER TO postgres;

--
-- Name: tblbill_bid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblbill_bid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblbill_bid_seq OWNER TO postgres;

--
-- Name: tblbill_bid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblbill_bid_seq OWNED BY public.tblbill.bid;


--
-- Name: tblcust; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblcust (
    custid integer NOT NULL,
    custname character varying(30),
    custcon bigint,
    cartype character varying(20),
    carclr character varying(12),
    carcat character varying(19),
    carcom character varying(27),
    carno text,
    pkgid integer
);


ALTER TABLE public.tblcust OWNER TO postgres;

--
-- Name: tblbook_custid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblbook_custid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblbook_custid_seq OWNER TO postgres;

--
-- Name: tblbook_custid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblbook_custid_seq OWNED BY public.tblcust.custid;


--
-- Name: tblcar; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblcar (
    crid integer NOT NULL,
    crno character varying(10),
    crtype character varying(18),
    crclr character varying(13),
    crcomp character varying(20),
    crcat character varying(15)
);


ALTER TABLE public.tblcar OWNER TO postgres;

--
-- Name: tblcar_crid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblcar_crid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblcar_crid_seq OWNER TO postgres;

--
-- Name: tblcar_crid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblcar_crid_seq OWNED BY public.tblcar.crid;


--
-- Name: tblemp; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblemp (
    eid integer NOT NULL,
    ename character varying(25),
    econ bigint,
    eemail character varying(25),
    eaddr text,
    egen character varying(6),
    ejoindt date,
    esal integer,
    eage integer
);


ALTER TABLE public.tblemp OWNER TO postgres;

--
-- Name: tblemp_eid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblemp_eid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblemp_eid_seq OWNER TO postgres;

--
-- Name: tblemp_eid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblemp_eid_seq OWNED BY public.tblemp.eid;


--
-- Name: tblmodfy; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblmodfy (
    mid integer NOT NULL,
    mname character varying(15),
    mcat character varying(10),
    mprice integer,
    mdesc character varying(50)
);


ALTER TABLE public.tblmodfy OWNER TO postgres;

--
-- Name: tblmodfy_mid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblmodfy_mid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblmodfy_mid_seq OWNER TO postgres;

--
-- Name: tblmodfy_mid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblmodfy_mid_seq OWNED BY public.tblmodfy.mid;


--
-- Name: tblnrmlpkg; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblnrmlpkg (
    npkgid integer NOT NULL,
    npkgname character varying(30),
    npkgdesc text,
    npkgprice numeric
);


ALTER TABLE public.tblnrmlpkg OWNER TO postgres;

--
-- Name: TABLE tblnrmlpkg; Type: COMMENT; Schema: public; Owner: postgres
--

COMMENT ON TABLE public.tblnrmlpkg IS 'normal package';


--
-- Name: tblnrm_npkgid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblnrm_npkgid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblnrm_npkgid_seq OWNER TO postgres;

--
-- Name: tblnrm_npkgid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblnrm_npkgid_seq OWNED BY public.tblnrmlpkg.npkgid;


--
-- Name: tblparts; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblparts (
    pid integer NOT NULL,
    pname character varying(25),
    pqty integer,
    pbprice integer,
    psprice integer,
    pcompany character varying(20),
    pdesc text
);


ALTER TABLE public.tblparts OWNER TO postgres;

--
-- Name: tblparts_pid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblparts_pid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblparts_pid_seq OWNER TO postgres;

--
-- Name: tblparts_pid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblparts_pid_seq OWNED BY public.tblparts.pid;


--
-- Name: tblservice; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblservice (
    sid integer NOT NULL,
    sname character varying(30),
    stype character varying(25),
    sdesc character varying(50),
    sprice integer
);


ALTER TABLE public.tblservice OWNER TO postgres;

--
-- Name: tblservice_sid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblservice_sid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblservice_sid_seq OWNER TO postgres;

--
-- Name: tblservice_sid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblservice_sid_seq OWNED BY public.tblservice.sid;


--
-- Name: tblvendors; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tblvendors (
    vid integer NOT NULL,
    vname character varying(25),
    vdesc text,
    vqty numeric,
    vcont bigint
);


ALTER TABLE public.tblvendors OWNER TO postgres;

--
-- Name: tblvendors_vid_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tblvendors_vid_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tblvendors_vid_seq OWNER TO postgres;

--
-- Name: tblvendors_vid_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tblvendors_vid_seq OWNED BY public.tblvendors.vid;


--
-- Name: tbladmin adid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tbladmin ALTER COLUMN adid SET DEFAULT nextval('public.tbladmin_adid_seq'::regclass);


--
-- Name: tblanulpkg pkgid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblanulpkg ALTER COLUMN pkgid SET DEFAULT nextval('public.tblanulpkg_pkgid_seq'::regclass);


--
-- Name: tblbill bid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblbill ALTER COLUMN bid SET DEFAULT nextval('public.tblbill_bid_seq'::regclass);


--
-- Name: tblcar crid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblcar ALTER COLUMN crid SET DEFAULT nextval('public.tblcar_crid_seq'::regclass);


--
-- Name: tblcust custid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblcust ALTER COLUMN custid SET DEFAULT nextval('public.tblbook_custid_seq'::regclass);


--
-- Name: tblemp eid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblemp ALTER COLUMN eid SET DEFAULT nextval('public.tblemp_eid_seq'::regclass);


--
-- Name: tblmodfy mid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblmodfy ALTER COLUMN mid SET DEFAULT nextval('public.tblmodfy_mid_seq'::regclass);


--
-- Name: tblnrmlpkg npkgid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblnrmlpkg ALTER COLUMN npkgid SET DEFAULT nextval('public.tblnrm_npkgid_seq'::regclass);


--
-- Name: tblparts pid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblparts ALTER COLUMN pid SET DEFAULT nextval('public.tblparts_pid_seq'::regclass);


--
-- Name: tblservice sid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblservice ALTER COLUMN sid SET DEFAULT nextval('public.tblservice_sid_seq'::regclass);


--
-- Name: tblvendors vid; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblvendors ALTER COLUMN vid SET DEFAULT nextval('public.tblvendors_vid_seq'::regclass);


--
-- Data for Name: tbladmin; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tbladmin (adid, adname, adcon, ademail, adgen, adpass) FROM stdin;
1	kadfh	6849940	afd@gmail.com	Female	\N
2	kadfh	6849940	afd@gmail.com	Female	\N
3	sumit	986532	sumit07@gmail.com	Male	\N
4	kb	123456789	kb@gmail.com	Male	\N
5	sp	8754213597	sp@gmail.com	Male	sp
6	shruti	8753005893	shruti28@gmail.com	Female	shru
7	vaibhav pawar	875465897	vpawar21@gmail.com	Male	123
8	nikhil chavan	7856129587	nikhil007@gmail.com	Male	.
9	vaibhav pawar	6589234578	vvpawar@gmail.com	Female	post
10	rr	1234567890	rr@gmail.com	Male	aa
\.


--
-- Data for Name: tblanulpkg; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblanulpkg (pkgid, pkgname, pkgnos, pkgdesc, pkgprice) FROM stdin;
1	engine and transmission	5	routine checkup\noiling	5000
2	General package	12	Routine check for all sections	35000
3	breakdown	20	providing service when you are in trouble	9999
5	body work	4	repair and damage body work	19999
6	Internal maintaince	3	accessories,mirror,back-camera	15999
4	electricals	8	Lights,Ac,engine,batteries,software update	7999
7	aa	11	aa	11
\.


--
-- Data for Name: tblbill; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblbill (bid, cid, ac, pdesc) FROM stdin;
1	8	300.00	fydgdc
2	8	200.00	dsgfwuihe
3	8	200.00	dsgfwuihe
4	8	200.00	buudhd
\.


--
-- Data for Name: tblcar; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblcar (crid, crno, crtype, crclr, crcomp, crcat) FROM stdin;
\.


--
-- Data for Name: tblcust; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblcust (custid, custname, custcon, cartype, carclr, carcat, carcom, carno, pkgid) FROM stdin;
8	aa	11	\N	aa	aa	aa	11	1
9	sujal Birari	9373004783	\N	WHITE	SEDAN	Honda	MH15FY2962	5
10	prasad dawre	8754875987	\N	BLACK	SEDAN	HYUNDAI	MH15EQ4892	4
\.


--
-- Data for Name: tblemp; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblemp (eid, ename, econ, eemail, eaddr, egen, ejoindt, esal, eage) FROM stdin;
1	sach	5489861	jkfduyfd@gmail.com	kd,98,87/87, nashik	Male	2022-06-15	14256	26
2	Sachin Hari Bachhav	7745198478	sachkiller@gmail.com	23,ramkund soc, satpur, nashik	Male	2022-03-17	13780	23
3	Yogesh Bhange	9845716548	ypbhange@rediffmail.com	28, mukund apartment, nashik.	Male	2020-06-20	25000	24
4	rajesh attarde	5468745216	rjattar@gmail.com	45,muktai,ambad	Male	2020-10-13	15680	26
5	vaibhav	9865859656	vaibhav@gmail.com	dgp-2	Male	2022-05-10	98000	27
\.


--
-- Data for Name: tblmodfy; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblmodfy (mid, mname, mcat, mprice, mdesc) FROM stdin;
1	head light	external	4000	head light with high beam
2	Body Paint	Colour	25400	Vinly,arcs,etc.
3	abc	abca	5422	dkel
4	demo	5487	8700	kj87
\.


--
-- Data for Name: tblnrmlpkg; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblnrmlpkg (npkgid, npkgname, npkgdesc, npkgprice) FROM stdin;
1	fitting	parts fitting	500
2	breaks	breaks check,maintainance	1499
3	wheels	tyre,mac-wheel,wheel alignment	4999
\.


--
-- Data for Name: tblparts; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblparts (pid, pname, pqty, pbprice, psprice, pcompany, pdesc) FROM stdin;
\.


--
-- Data for Name: tblservice; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblservice (sid, sname, stype, sdesc, sprice) FROM stdin;
2	nfefu	fjnejnfiu	ojfnefuefh	10000
3	window	flame	external	4000
\.


--
-- Data for Name: tblvendors; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tblvendors (vid, vname, vdesc, vqty, vcont) FROM stdin;
1	jvfu	uwdhdgeu	51	848456
\.


--
-- Name: tbladmin_adid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tbladmin_adid_seq', 10, true);


--
-- Name: tblanulpkg_pkgid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblanulpkg_pkgid_seq', 7, true);


--
-- Name: tblbill_bid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblbill_bid_seq', 4, true);


--
-- Name: tblbook_custid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblbook_custid_seq', 10, true);


--
-- Name: tblcar_crid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblcar_crid_seq', 1, false);


--
-- Name: tblemp_eid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblemp_eid_seq', 5, true);


--
-- Name: tblmodfy_mid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblmodfy_mid_seq', 4, true);


--
-- Name: tblnrm_npkgid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblnrm_npkgid_seq', 3, true);


--
-- Name: tblparts_pid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblparts_pid_seq', 1, false);


--
-- Name: tblservice_sid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblservice_sid_seq', 3, true);


--
-- Name: tblvendors_vid_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tblvendors_vid_seq', 1, true);


--
-- Name: tblanulpkg tblanulpkg_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblanulpkg
    ADD CONSTRAINT tblanulpkg_pkey PRIMARY KEY (pkgid);


--
-- Name: tblanulpkg tblanulpkg_pkgname_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblanulpkg
    ADD CONSTRAINT tblanulpkg_pkgname_key UNIQUE (pkgname);


--
-- Name: tblbill tblbill_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblbill
    ADD CONSTRAINT tblbill_pkey PRIMARY KEY (bid);


--
-- Name: tblcust tblbook_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblcust
    ADD CONSTRAINT tblbook_pkey PRIMARY KEY (custid);


--
-- Name: tblcar tblcar_crno_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblcar
    ADD CONSTRAINT tblcar_crno_key UNIQUE (crno);


--
-- Name: tblcar tblcar_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblcar
    ADD CONSTRAINT tblcar_pkey PRIMARY KEY (crid);


--
-- Name: tblemp tblemp_ename_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblemp
    ADD CONSTRAINT tblemp_ename_key UNIQUE (ename);


--
-- Name: tblemp tblemp_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblemp
    ADD CONSTRAINT tblemp_pkey PRIMARY KEY (eid);


--
-- Name: tblmodfy tblmodfy_mname_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblmodfy
    ADD CONSTRAINT tblmodfy_mname_key UNIQUE (mname);


--
-- Name: tblmodfy tblmodfy_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblmodfy
    ADD CONSTRAINT tblmodfy_pkey PRIMARY KEY (mid);


--
-- Name: tblnrmlpkg tblnrm_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblnrmlpkg
    ADD CONSTRAINT tblnrm_pkey PRIMARY KEY (npkgid);


--
-- Name: tblparts tblparts_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblparts
    ADD CONSTRAINT tblparts_pkey PRIMARY KEY (pid);


--
-- Name: tblparts tblparts_pname_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblparts
    ADD CONSTRAINT tblparts_pname_key UNIQUE (pname);


--
-- Name: tblservice tblservice_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblservice
    ADD CONSTRAINT tblservice_pkey PRIMARY KEY (sid);


--
-- Name: tblvendors tblvendors_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblvendors
    ADD CONSTRAINT tblvendors_pkey PRIMARY KEY (vid);


--
-- Name: tblvendors tblvendors_vcont_key; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tblvendors
    ADD CONSTRAINT tblvendors_vcont_key UNIQUE (vcont);


--
-- PostgreSQL database dump complete
--

