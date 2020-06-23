import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Button from '@material-ui/core/Button';
import Dialog from '@material-ui/core/Dialog';

import Title from '@layouts/title';
import FormBuilder from '@layouts/form';
import TableBuilder from "@layouts/table";
import { useLang } from "@contexts/lang";

function ApplicantItem(props){
    const [isLoading, setIsLoading] = useState(true);
    const [data, setData] = useState({});
    const [form, setForm] = useState({});
    const [formDisabled, setFormDisabled] = useState(false);
    
    const { getL } = useLang();

    useEffect(() => {
        getData(props.id);
    }, []);

    const getData = (id) => {
        window.axios.get('list_of_applicants/'+id).then((response) => {
            setData(response.data.item);
            setForm(response.data.form);
            setIsLoading(false);
        });
    }
    const handleSubmit = (data) => {
        window.axios.post('list_of_applicants/'+props.id, data).then((response) => {
            getData(props.id);
        })
    }
    const fileSubmit = (data) => {
        
    }

    if(isLoading) return (<div />);

    return (
        <Box>
            <Title 
                content={data.user.lastname + " " + data.user.firstname + " " + (data.user.patronymic || '')}
                tree={[
                    {link: '/list_of_applicants', name: 'Абитуриенты'},
                    {name: 'Редактировать профиль абитуриента'}
                ]}
            />
            <Box component={Paper} mt={4}>
                <FormBuilder
                    disabled={formDisabled}
                    title="Данные об абитуриенте"
                    handleSubmit={handleSubmit}
                    fields={[
                        {
                            label: '1. Личные данные',
                            type: 'header'
                        },
                        {
                            name: 'lastname',
                            label: 'Фамилия',
                            value: data.user.lastname,
                        },
                        {
                            name: 'firstname',
                            label: 'Имя',
                            value: data.user.firstname,
                        },
                        {
                            name: 'patronymic',
                            label: 'Отчество',
                            value: data.user.patronymic,
                            required: false
                        },
                        {
                            name: 'birthdate',
                            label: 'Дата рождения',
                            value: data.user.birthdate,
                            width: 1/2,
                            type: 'date'
                        },
                        {
                            name: 'gender',
                            label: 'Пол',
                            value: data.user.gender,
                            width: 1/2,
                            type: 'select',
                            select: {
                                label: 'description_'+getL,
                                value: 'id',
                                items: form.gender
                            }
                        },
                        {
                            name: 'nationality_id',
                            label: 'Национальность',
                            value: data.user.nationality_id,
                            width: 1/2,
                            type: 'select',
                            select: {
                                label: 'name_'+getL,
                                value: 'id',
                                items: form.nationality
                            }
                        },
                        {
                            name: 'iin',
                            label: 'ИИН',
                            disabled: true,
                            value: data.user.iin,
                            width: 1/2,
                        },
                        {
                            name: 'email',
                            label: 'E-mail',
                            value: data.user.email,
                            width: 1/2,
                            mask: 'email'
                        },
                        {
                            name: 'tel',
                            label: 'Телефон',
                            value: data.user.tel,
                            width: 1/2,
                            mask: '+7 (999) 999 99 99',
                        },
                        {
                            name: 'registration_address',
                            label: 'Адрес прописки',
                            value: data.user.registration_address,
                        },
                        {
                            name: 'residential_address',
                            label: 'Адрес проживания',
                            value: data.user.residential_address,
                        },
                        {
                            label: '2. Основной документ',
                            type: 'header'
                        },
                        {
                            label: 'Тип документа',
                            type: 'select',
                            name: 'main_doc_type',
                            width: 1/2,
                            value: data.main_doc_type,
                            select: {
                                value: 'id',
                                label: 'title',
                                items: [
                                    {id: 1, title: 'Удостоверение личности'},
                                    {id: 2, title: 'Паспорт'},
                                    {id: 3, title: 'Свидетельство о рождении'},
                                    {id: 4, title: 'Вид на жительство'},
                                    {id: 5, title: 'Другой документ'},
                                ]
                            }
                        },
                        {
                            label: '№ документа',
                            name: 'main_doc_number',
                            value: data.main_doc_number,
                            width: 1/2
                        },
                        {
                            label: 'Серия документа',
                            name: 'main_doc_series',
                            value: data.main_doc_series,
                            width: 1/2,
                            required: false
                        },
                        {
                            label: 'Срок годности документа',
                            name: 'main_doc_date',
                            type: 'date',
                            value: data.main_doc_date,
                            width: 1/2
                        },
                        {
                            label: 'Орган выдавший документ',
                            name: 'main_doc_giver',
                            value: data.main_doc_giver,
                            width: 1/2
                        },
                        {
                            label: '3. Карта абитуриента',
                            type: 'header'
                        },
                        {
                            name: 'lastname_translit',
                            label: 'Фамилия (на латинице)',
                            value: data.lastname_translit
                        },
                        {
                            name: 'firstname_translit',
                            label: 'Имя (на латинице)',
                            value: data.firstname_translit
                        },
                        {
                            name: 'patronymic_translit',
                            label: 'Отчество (на латинице)',
                            value: data.patronymic_translit,
                            required: false
                        },
                        {
                            name: 'birthplace',
                            label: 'Место рождения',
                            value: data.birthplace
                        },
                        {
                            name: 'social_statuses',
                            label: 'Социальные категории',
                            required: false,
                            type: 'select',
                            value: data.social_status,
                            select: {
                                items: form.social_status,
                                label: 'title_'+getL,
                                value: 'id',
                                multiple: true,
                            }
                        },
                        {
                            name: 'military_organization_id',
                            label: 'Район военкомата (*обязательно для юношей)',
                            width: 1/2,
                            required: false,
                            type: 'select',
                            select: {
                                items: form.military,
                                value: 'id',
                                label: 'title_'+getL
                            }
                        },
                        {
                            label: 'Проживает в г. Алматы',
                            type: 'checkbox',
                            name: 'live_in_almaty',
                            required: false,
                            value: data.live_in_almaty,
                            width: 1/2
                        },
                        {
                            label: '4. Академический план',
                            type: 'header'
                        },
                        {
                            name: 'study_form_id',
                            label: 'Форма обучения',
                            value: data.study_form_id,
                            width: 1/2,
                            type: 'select',
                            select: {
                                label: 'description_'+getL,
                                value: 'id',
                                items: form.study_form
                            }
                        },
                        {
                            name: 'edu_program_id',
                            label: 'Обр. программа',
                            value: data.edu_program_id,
                            width: 1/2,
                            type: 'select',
                            select: {
                                label: 'title_'+getL,
                                value: 'id',
                                items: form.edu_program
                            }
                        },
                        {
                            name: 'payment_form_id',
                            label: 'Форма оплаты',
                            type: 'select',
                            value: data.payment_form_id,
                            width: 1/2,
                            select: {
                                value: 'id',
                                label: 'description_'+getL,
                                items: form.payment_form
                            }
                        },
                        {
                            name: 'need_campus',
                            label: 'Необходимость общежития',
                            type: 'select',
                            width: 1/2,
                            value: data.need_campus,
                            select: {
                                value: 'id',
                                label: 'title',
                                items: [
                                    {id: 0, title: 'Не нуждается'},
                                    {id: 1, title: 'Нуждается'},
                                    {id: 2, title: 'Обеспечен'}
                                ]
                            }
                        },
                        {
                            name: 'english_level_id',
                            label: 'Уровень английского',
                            type: 'select',
                            value: data.english_level_id,
                            select: {
                                value: 'id',
                                label: 'description_'+getL,
                                items: form.english_level
                            },
                            width: 1/2,
                            required: false
                        },
                        {
                            name: 'citizenship',
                            label: 'Гражданство',
                            type: 'select',
                            value: data.citizenship,
                            select: {
                                value: 'id',
                                label: 'name_'+getL,
                                items: form.citizenship
                            },
                            width: 1/2,
                            required: false
                        },
                        {
                            label: '5. Сертификат ЕНТ/КТА',
                            type: 'header'
                        },
                        {
                            label: 'Номер сертификата',
                            name: 'ent_certificate_number',
                            value: data.ent_certificate_number,
                        },
                        {
                            label: 'Серия сертификата',
                            name: 'ent_certificate_series',
                            required: false,
                            width: 1/2,
                            value: data.ent_certificate_series,
                        },
                        {
                            label: 'ИКТ',
                            name: 'ent_ikt',
                            width: 1/2,
                            value: data.ent_ikt
                        },
                        {
                            label: 'Общий балл',
                            name: 'ent_total',
                            type: 'float',
                            min: 0,
                            max: 140,
                            width: 1/2,
                            value: data.ent_total
                        },
                        {
                            label: 'История Казахстана',
                            name: 'ent_history_of_kk',
                            type: 'float',
                            required: false,
                            min: 0,
                            max: 100,
                            width: 1/2,
                            value: data.ent_history_of_kk
                        },
                        {
                            label: 'Математическая грамотность',
                            name: 'ent_math',
                            type: 'float',
                            required: false,
                            min: 0,
                            max: 100,
                            width: 1/2,
                            value: data.ent_math
                        },
                        {
                            label: 'Грамотность чтения',
                            name: 'ent_reading',
                            type: 'float',
                            required: false,
                            min:  0,
                            max: 0,
                            width: 1/2,
                            value: data.ent_reading
                        },
                        {
                            label: 'Профильный 1 (Математика)',
                            name: 'ent_profile_1',
                            type: 'float',
                            required: false,
                            min: 0,
                            max: 0,
                            width: 1/2,
                            value: data.ent_profile_1
                        },
                        {
                            label: 'Профильный 2 (Физика/География)',
                            name: 'ent_profile_2',
                            type: 'float',
                            required: false,
                            min: 0,
                            max: 0,
                            width: 1/2,
                            value: data.ent_profile_2
                        },
                        {
                            label: 'Творческий экзамен',
                            name: 'creative_exam',
                            type: 'float',
                            required: false,
                            min: 0,
                            max: 0,
                            width: 1/2,
                            value: data.creative_exam
                        },
                        {
                            label: 'Творческий экзамен 2',
                            name: 'creative_exam2',
                            type: 'float',
                            required: false,
                            min: 0,
                            max: 0,
                            width: 1/2,
                            value: data.creative_exam2
                        },
                        {
                            label: '6. Данные о предыдущем образовании',
                            type: 'header'
                        },
                        {
                            label: 'Тип образовательного учреждения',
                            name: 'prev_edu_org_type',
                            type: 'select',
                            select: {
                                value: 'id',
                                label: 'title',
                                items: [
                                    {id: 1, title: 'Школа'},
                                    {id: 2, title: 'Колледж'},
                                    {id: 3, title: 'ВУЗ'},
                                    {id: 4, title: 'Другое'}
                                ]
                            },
                            width: 1/2,
                            value: data.prev_edu_org_type
                        },
                        {
                            label: 'Регион расположения',
                            name: 'prev_edu_org_region',
                            type: 'select',
                            select: {
                                value: 'id',
                                label: 'name_ru',
                                items: form.prev_edu_org_region
                            },
                            width: 1/2,
                            value: data.prev_edu_org_region
                        },
                        {
                            label: 'Язык обучения',
                            name: 'prev_edu_language',
                            type: 'select',
                            select: {
                                value: 'id',
                                label: 'title_'+getL,
                                items: form.prev_edu_language
                            },
                            width: 1/2,
                            value: data.prev_edu_language
                        },
                        {
                            label: 'GPA/Средняя оценка',
                            name: 'prev_edu_score',
                            type: 'float',
                            width: 1/2,
                            required: false,
                            value: data.prev_edu_score
                        },
                        {
                            label: 'Название специальности/направления',
                            name: 'prev_edu_direction',
                            width: 1/2,
                            required: false,
                            value: data.prev_edu_direction
                        },
                        {
                            label: 'Зарубежное учреждение',
                            name: 'prev_edu_foreign',
                            type: 'checkbox',
                            required: false,
                            width: 1/2,
                            value: data.prev_edu_foreign
                        },
                        {
                            name: 'prev_edu_diplom_series',
                            label: 'Серия диплома / аттестата',
                            width: 1/2,
                            value: data.prev_edu_diplom_series
                        },
                        {
                            name: 'prev_edu_diplom_number',
                            label: 'Номер диплома / аттестата',
                            width: 1/2,
                            value: data.prev_edu_diplom_number
                        },
                        {
                            label: 'Дата выдачи диплома',
                            name: 'prev_edu_diplom_date',
                            type: 'date',
                            required: false,
                            width: 1/2,
                            value: data.prev_edu_diplom_date
                        },
                        {
                            label: 'Диплом с отличием (Алтын белгi)',
                            name: 'prev_edu_diplom_excellent',
                            type: 'checkbox',
                            required: false,
                            width: 1/2,
                            value: data.prev_edu_diplom_excellent
                        },

                    ]}
                />
            </Box>
            <Box component={Paper} mt={4}>
                <FormBuilder 
                    title="Загруженные документы"
                    handleSubmit={fileSubmit}
                    fields={[
                        {
                            label: 'Документ удостоверяющий личность',
                            name: 'udv_file',
                            type: 'file',
                            required: false,
                            file: data.udv_file
                        },
                        {
                            label: 'Сертификат ЕНТ',
                            name: 'ent_file',
                            type: 'file',
                            required: false,
                            file: data.ent_file
                        },
                        {
                            label: 'Документ о среднем образовании',
                            name: 'middle_diplom_file',
                            type: 'file',
                            required: false,
                            file: data.middle_diplom_file
                        },
                        {
                            label: 'Документ о высшем образовании',
                            name: 'hight_diplom_file',
                            type: 'file',
                            required: false,
                            file: data.hight_diplom_file
                        },
                        {
                            label: 'Подтверждающий документ о льготах',
                            name: 'exemption_file',
                            type: 'file',
                            required: false,
                            file: data.exemption_file
                        },
                        {
                            label: 'Сертификаты, грамоты, дипломы, IELTS или TOEFL и так далее',
                            name: 'other_file',
                            type: 'file',
                            required: false,
                            file: data.other_file
                        }
                    ]}
                />
            </Box>
        </Box>
    );
}

export default ApplicantItem;