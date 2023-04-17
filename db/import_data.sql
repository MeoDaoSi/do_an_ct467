
INSERT INTO
  `admins` (
    `id`,
    `username`,
    `fullname`,
    `gender`,
    `birthday`,
    `email`,
    `password`
  )
VALUES
  (
    1,
    'admin',
    'Vũ',
    1,
    '2002-04-04',
    'adminemail@gmail.com',
    'password'
  ),
  (
    2,
    'admin2',
    'Lâm',
    1,
    '2002-04-12',
    'admin2email@gmai.com',
    'password'
  );

INSERT INTO
  `films` (
    `id`,
    `name`,
    `description`,
    `length`,
    `cover_image`,
    `release_year`
  )
VALUES
  (
    1,
    'Avatar: Dòng chảy của nước',
    'Avatar: Dòng chảy của nước là một bộ phim khoa học viễn tưởng sử thi của Mỹ năm 2022 do James Cameron đạo diễn, người đồng viết kịch bản với Rick Jaffa và Amanda Silver từ một câu chuyện mà bộ ba viết cùng Josh Friedman và Shane Salerno.',
    150,
    'https://vcdn1-giaitri.vnecdn.net/2022/09/23/-2181-1663929656.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=apYgDs9tYQiwn7pcDOGbNg',
    2022
  ),
  (
    2,
    'Mèo đi hia: Điều ước cuối cùng',
    'Mèo đi hia: Điều ước cuối cùng là bộ phim hoạt hình hài phiêu lưu được sản xuất bởi DreamWorks Animation. Phim là ngoại truyện của loạt phim Shrek và là hậu truyện của Mèo đi hia.',
    120,
    'https://i.imgur.com/p4p7yaa.jpg',
    2022
  ),
  (
    3,
    'Thế giới khủng long: Lãnh địa',
    'Thế giới khủng long: Lãnh địa là một bộ phim hành động khoa học viễn tưởng năm 2022 của Mỹ do Colin Trevorrow đạo diễn, người đã viết kịch bản cùng Emily Carmichael, dựa trên một câu chuyện của Trevorrow và cộng sự viết kịch bản của anh, Derek Connolly.',
    190,
    'https://cocophim.com/wp-content/uploads/2023/01/the-gioi-khung-long-3-lanh-dia-jurassic-world-dominion.jpg',
    2022
  ),
  (
    4,
    'The Batman: Vạch trần sự thật',
    'The Batman: Vạch trần sự thật là một bộ phim điện ảnh đề tài siêu anh hùng của Mỹ, dựa trên nhân vật cùng tên của loạt truyện tranh DC Comics.',
    100,
    'https://upload.afkmobi.com/photos/afkmobi-com/2022/03/afkmobi_BATMAN_vach_tran_su_that_anh_1s.jpg',
    2022
  ),
  (
    5,
    'Transformers 3',
    'Transformers 3 là một phim điện ảnh hành động khoa học viễn tưởng của Mỹ năm 2011 do Michael Bay đạo diễn dựa trên dòng đồ chơi cùng tên của công ty Hasbro. Đây là phần phim thứ ba trong loạt phim Transformers, và là phần tiếp theo của phim điện ảnh Transformers: Bại binh phục hận công chiếu năm 2009.',
    137,
    'https://2.bp.blogspot.com/-w29fws9Xyl8/Td2c6uFQPnI/AAAAAAAALNc/77VJ5A-m4I0/s1600/TF3OptimusShiaRosieBanner.jpg',
    2020
  );

INSERT INTO
  `premieres` (
    `id`,
    `film_id`,
    `start`,
    `end`,
    `total_seats`,
    `remaining_seats`
  )
VALUES
  (
    1,
    1,
    '2023-04-11 09:24:37',
    '2023-04-11 09:24:37',
    120,
    120
  ),
  (
    2,
    2,
    '2023-04-11 09:24:58',
    '2023-04-11 09:24:58',
    200,
    200
  );

INSERT INTO
  `seats` (`id`, `row`, `col`)
VALUES
  (2, 1, 1),
  (3, 1, 2),
  (4, 1, 3),
  (5, 1, 4),
  (6, 1, 5),
  (7, 1, 6),
  (8, 1, 7),
  (9, 1, 8),
  (10, 1, 9),
  (11, 1, 10),
  (12, 1, 11),
  (13, 1, 12),
  (14, 1, 13),
  (15, 1, 14),
  (16, 1, 15),
  (17, 1, 16),
  (18, 1, 17),
  (19, 1, 18),
  (20, 1, 19),
  (21, 1, 20),
  (22, 2, 1),
  (23, 2, 2),
  (24, 2, 3),
  (25, 2, 4),
  (26, 2, 5),
  (27, 2, 6),
  (28, 2, 7),
  (29, 2, 8),
  (30, 2, 9),
  (31, 2, 10),
  (32, 2, 11),
  (33, 2, 12),
  (34, 2, 13),
  (35, 2, 14),
  (36, 2, 15),
  (37, 2, 16),
  (38, 2, 17),
  (39, 2, 18),
  (40, 2, 19),
  (41, 2, 20),
  (42, 3, 1),
  (43, 3, 2),
  (44, 3, 3),
  (45, 3, 4),
  (46, 3, 5),
  (47, 3, 6),
  (48, 3, 7),
  (49, 3, 8),
  (50, 3, 9),
  (51, 3, 10),
  (52, 3, 11),
  (53, 3, 12),
  (54, 3, 13),
  (55, 3, 14),
  (56, 3, 15),
  (57, 3, 16),
  (58, 3, 17),
  (59, 3, 18),
  (60, 3, 19),
  (61, 3, 20),
  (62, 4, 1),
  (63, 4, 2),
  (64, 4, 3),
  (65, 4, 4),
  (66, 4, 5),
  (67, 4, 6),
  (68, 4, 7),
  (69, 4, 8),
  (70, 4, 9),
  (71, 4, 10),
  (72, 4, 11),
  (73, 4, 12),
  (74, 4, 13),
  (75, 4, 14),
  (76, 4, 15),
  (77, 4, 16),
  (78, 4, 17),
  (79, 4, 18),
  (80, 4, 19),
  (81, 4, 20),
  (82, 5, 1),
  (83, 5, 2),
  (84, 5, 3),
  (85, 5, 4),
  (86, 5, 5),
  (87, 5, 6),
  (88, 5, 7),
  (89, 5, 8),
  (90, 5, 9),
  (91, 5, 10),
  (92, 5, 11),
  (93, 5, 12),
  (94, 5, 13),
  (95, 5, 14),
  (96, 5, 15),
  (97, 5, 16),
  (98, 5, 17),
  (99, 5, 18),
  (100, 5, 19),
  (101, 5, 20),
  (102, 6, 1),
  (103, 6, 2),
  (104, 6, 3),
  (105, 6, 4),
  (106, 6, 5),
  (107, 6, 6),
  (108, 6, 7),
  (109, 6, 8),
  (110, 6, 9),
  (111, 6, 10),
  (112, 6, 11),
  (113, 6, 12),
  (114, 6, 13),
  (115, 6, 14),
  (116, 6, 15),
  (117, 6, 16),
  (118, 6, 17),
  (119, 6, 18),
  (120, 6, 19),
  (121, 6, 20),
  (122, 7, 1),
  (123, 7, 2),
  (124, 7, 3),
  (125, 7, 4),
  (126, 7, 5),
  (127, 7, 6),
  (128, 7, 7),
  (129, 7, 8),
  (130, 7, 9),
  (131, 7, 10),
  (132, 7, 11),
  (133, 7, 12),
  (134, 7, 13),
  (135, 7, 14),
  (136, 7, 15),
  (137, 7, 16),
  (138, 7, 17),
  (139, 7, 18),
  (140, 7, 19),
  (141, 7, 20),
  (142, 8, 1),
  (143, 8, 2),
  (144, 8, 3),
  (145, 8, 4),
  (146, 8, 5),
  (147, 8, 6),
  (148, 8, 7),
  (149, 8, 8),
  (150, 8, 9),
  (151, 8, 10),
  (152, 8, 11),
  (153, 8, 12),
  (154, 8, 13),
  (155, 8, 14),
  (156, 8, 15),
  (157, 8, 16),
  (158, 8, 17),
  (159, 8, 18),
  (160, 8, 19),
  (161, 8, 20),
  (162, 9, 1),
  (163, 9, 2),
  (164, 9, 3),
  (165, 9, 4),
  (166, 9, 5),
  (167, 9, 6),
  (168, 9, 7),
  (169, 9, 8),
  (170, 9, 9),
  (171, 9, 10),
  (172, 9, 11),
  (173, 9, 12),
  (174, 9, 13),
  (175, 9, 14),
  (176, 9, 15),
  (177, 9, 16),
  (178, 9, 17),
  (179, 9, 18),
  (180, 9, 19),
  (181, 9, 20),
  (182, 10, 1),
  (183, 10, 2),
  (184, 10, 3),
  (185, 10, 4),
  (186, 10, 5),
  (187, 10, 6),
  (188, 10, 7),
  (189, 10, 8),
  (190, 10, 9),
  (191, 10, 10),
  (192, 10, 11),
  (193, 10, 12),
  (194, 10, 13),
  (195, 10, 14),
  (196, 10, 15),
  (197, 10, 16),
  (198, 10, 17),
  (199, 10, 18),
  (200, 10, 19),
  (201, 10, 20),
  (202, 11, 1),
  (203, 11, 2),
  (204, 11, 3),
  (205, 11, 4),
  (206, 11, 5),
  (207, 11, 6),
  (208, 11, 7),
  (209, 11, 8),
  (210, 11, 9),
  (211, 11, 10),
  (212, 11, 11),
  (213, 11, 12),
  (214, 11, 13),
  (215, 11, 14),
  (216, 11, 15),
  (217, 11, 16),
  (218, 11, 17),
  (219, 11, 18),
  (220, 11, 19),
  (221, 11, 20),
  (222, 12, 1),
  (223, 12, 2),
  (224, 12, 3),
  (225, 12, 4),
  (226, 12, 5),
  (227, 12, 6),
  (228, 12, 7),
  (229, 12, 8),
  (230, 12, 9),
  (231, 12, 10),
  (232, 12, 11),
  (233, 12, 12),
  (234, 12, 13),
  (235, 12, 14),
  (236, 12, 15),
  (237, 12, 16),
  (238, 12, 17),
  (239, 12, 18),
  (240, 12, 19),
  (241, 12, 20),
  (242, 13, 1),
  (243, 13, 2),
  (244, 13, 3),
  (245, 13, 4),
  (246, 13, 5),
  (247, 13, 6),
  (248, 13, 7),
  (249, 13, 8),
  (250, 13, 9),
  (251, 13, 10),
  (252, 13, 11),
  (253, 13, 12),
  (254, 13, 13),
  (255, 13, 14),
  (256, 13, 15),
  (257, 13, 16),
  (258, 13, 17),
  (259, 13, 18),
  (260, 13, 19),
  (261, 13, 20),
  (262, 14, 1),
  (263, 14, 2),
  (264, 14, 3),
  (265, 14, 4),
  (266, 14, 5),
  (267, 14, 6),
  (268, 14, 7),
  (269, 14, 8),
  (270, 14, 9),
  (271, 14, 10),
  (272, 14, 11),
  (273, 14, 12),
  (274, 14, 13),
  (275, 14, 14),
  (276, 14, 15),
  (277, 14, 16),
  (278, 14, 17),
  (279, 14, 18),
  (280, 14, 19),
  (281, 14, 20),
  (282, 15, 1),
  (283, 15, 2),
  (284, 15, 3),
  (285, 15, 4),
  (286, 15, 5),
  (287, 15, 6),
  (288, 15, 7),
  (289, 15, 8),
  (290, 15, 9),
  (291, 15, 10),
  (292, 15, 11),
  (293, 15, 12),
  (294, 15, 13),
  (295, 15, 14),
  (296, 15, 15),
  (297, 15, 16),
  (298, 15, 17),
  (299, 15, 18),
  (300, 15, 19),
  (301, 15, 20),
  (302, 16, 1),
  (303, 16, 2),
  (304, 16, 3),
  (305, 16, 4),
  (306, 16, 5),
  (307, 16, 6),
  (308, 16, 7),
  (309, 16, 8),
  (310, 16, 9),
  (311, 16, 10),
  (312, 16, 11),
  (313, 16, 12),
  (314, 16, 13),
  (315, 16, 14),
  (316, 16, 15),
  (317, 16, 16),
  (318, 16, 17),
  (319, 16, 18),
  (320, 16, 19),
  (321, 16, 20),
  (322, 17, 1),
  (323, 17, 2),
  (324, 17, 3),
  (325, 17, 4),
  (326, 17, 5),
  (327, 17, 6),
  (328, 17, 7),
  (329, 17, 8),
  (330, 17, 9),
  (331, 17, 10),
  (332, 17, 11),
  (333, 17, 12),
  (334, 17, 13),
  (335, 17, 14),
  (336, 17, 15),
  (337, 17, 16),
  (338, 17, 17),
  (339, 17, 18),
  (340, 17, 19),
  (341, 17, 20),
  (342, 18, 1),
  (343, 18, 2),
  (344, 18, 3),
  (345, 18, 4),
  (346, 18, 5),
  (347, 18, 6),
  (348, 18, 7),
  (349, 18, 8),
  (350, 18, 9),
  (351, 18, 10),
  (352, 18, 11),
  (353, 18, 12),
  (354, 18, 13),
  (355, 18, 14),
  (356, 18, 15),
  (357, 18, 16),
  (358, 18, 17),
  (359, 18, 18),
  (360, 18, 19),
  (361, 18, 20),
  (362, 19, 1),
  (363, 19, 2),
  (364, 19, 3),
  (365, 19, 4),
  (366, 19, 5),
  (367, 19, 6),
  (368, 19, 7),
  (369, 19, 8),
  (370, 19, 9),
  (371, 19, 10),
  (372, 19, 11),
  (373, 19, 12),
  (374, 19, 13),
  (375, 19, 14),
  (376, 19, 15),
  (377, 19, 16),
  (378, 19, 17),
  (379, 19, 18),
  (380, 19, 19),
  (381, 19, 20),
  (382, 20, 1),
  (383, 20, 2),
  (384, 20, 3),
  (385, 20, 4),
  (386, 20, 5),
  (387, 20, 6),
  (388, 20, 7),
  (389, 20, 8),
  (390, 20, 9),
  (391, 20, 10),
  (392, 20, 11),
  (393, 20, 12),
  (394, 20, 13),
  (395, 20, 14),
  (396, 20, 15),
  (397, 20, 16),
  (398, 20, 17),
  (399, 20, 18),
  (400, 20, 19),
  (401, 20, 20);

INSERT INTO
  `users` (
    `id`,
    `username`,
    `fullname`,
    `gender`,
    `birthday`,
    `email`,
    `password`
  )
VALUES
  (
    1,
    'user1',
    'Trần Khang',
    1,
    '2002-04-04',
    'user1@gmail.com',
    'password'
  ),
  (
    2,
    'user2',
    'Long Nguyễn',
    1,
    '2002-04-12',
    'user2@gmai.com',
    'password'
  );
