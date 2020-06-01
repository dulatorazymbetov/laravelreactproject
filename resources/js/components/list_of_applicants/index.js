import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "@layouts/title";
import MaterialTable, { MTableToolbar } from 'material-table';

const useStyles = makeStyles(theme => ({
	
}));

function EditRespond(){
	const classes = useStyles();
	const [isLoading, setIsLoading] = useState(true);
	const [applicants, setApplicants] = useState([]);

	useEffect(() => {
       	window.axios.get('applicants').then((response) => {
       		console.log(response.data);
			setApplicants(response.data);
			setIsLoading(false);
       	});
    }, []);

    const data = applicants.map((applicant, index) => (
		{
			index: applicant.id,
			name: applicant.firstname,
			surname: applicant.lastname,
			patronymic: applicant.patronymic,
			iin: applicant.iin,
			phone: applicant.phone,
			email: applicant.email,
		}
	))

	return (
		<Box>
			<Title content="Абитуриенты" />
			{!isLoading && <Box mt={3}>
				<Paper elevation={3}>
					<MaterialTable
			      		title="Список абитуриентов"
			      		localization={{
			      			body: {
			      				emptyDataSourceMessage: "Не найдено"
			      			},
		                    toolbar: {
		                        searchPlaceholder: "Поиск",
		                        searchTooltip: "Поиск",
		                        exportTitle: "Скачать",
		                        exportName: "Скачать как CSV"
		                    },
		                    pagination: {
		                    	labelRowsSelect: "строк",
		                    	labelDisplayedRows: "{from}-{to} из {count}",
		                    	firstTooltip: "Первая страница",
		                    	previousTooltip: "Предыдущая страница",
		                    	nextTooltip: "Следующая страница",
		                    	lastTooltip: "Последняя страница"
		                    }
		                }}
			      		columns={[
			      			{ title: '№', field: 'index' },
					        { title: 'Имя', field: 'name' },
					        { title: 'Фамилия', field: 'surname' },
					        { title: 'Отчество', field: 'patronymic' },
			      			{ title: 'ИИН', field: 'iin' },
					        { title: 'Телефон номера', field: 'phone' },
					        { title: 'Email', field: 'email' },
		      			]}
				      	data=
				      	{
				      		data
			      		}
				      	detailPanel =
				      	{[
			      			{
					      		icon: 'description',
						      	render: rowData => {
					      			return (
					      				<Box m={3}>
					      					
					      				</Box>
									);
							    }
							},
						]}
						components={{
					        Toolbar: props => (
					            <div style={{  }}>
					                <MTableToolbar {...props} />
					            </div>
					        )
					    }}
					    options={{
				      		exportButton: true
					    }}
				    />
				</Paper>
			</Box>}
		</Box>
	);
}

export default EditRespond;