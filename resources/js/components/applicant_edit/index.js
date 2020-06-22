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
		getData();
	}, []);

    const getData = () => {
		window.axios.get('applicant_edit').then((response) => {
			setData(response.data.item);
			setForm(response.data.form);
			setIsLoading(false);
		});
	}
    const handleSubmit = (data) => {
        window.axios.post('applicant_edit', data).then((response) => {
            getData();
        })
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
                            value: data.user.iin,
                            width: 1/2,
                            mask: '999999999999',
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
                            label: '2. Карта абитуриента',
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
                            name: 'social_category_id',
                            label: 'Социальные категории',
                            width: 1/2,
                            required: false,
                            type: 'select',
                            select: {
                                items: []
                            }
                        },
                        {
                            name: 'military_organization_id',
                            label: 'Район военкомата (*обязательно для юношей)',
                            width: 1/2,
                            required: false,
                            type: 'select',
                            select: {
                                items: []
                            }
                        },
                        {
                            label: 'Проживает в г. Алматы',
                            type: 'checkbox',
                            name: 'live_in_almaty',
                            required: false
                        },
                        {
                            label: 'Документ удостоверяющий личность',
                            type: 'file',
                            name: 'udv'
                        }
                    ]}
                />
            </Box>
        </Box>
    );
}

export default ApplicantItem;