import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';

import Paper from '@material-ui/core/Paper';
import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';

import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function RoleList(props) {
	const classes = useStyles();
	const { setW, getW, setL, getL } = useLang();

	const [roles, setRoles] = useState([]);

	useEffect(() => {
    	window.axios('/roles').then((response) => {
    		setRoles(response.data);
    	});
    }, []);

	return (
		<TableContainer component={Paper}>
			<Table stickyHeader>
				<TableHead>
					<TableRow>
						<TableCell>
							ID
						</TableCell>
						<TableCell>
							Code
						</TableCell>
						<TableCell>
							Название
						</TableCell>
						<TableCell>
							Доступные модули
						</TableCell>
					</TableRow>
				</TableHead>
				<TableBody>
					{roles.map((role, role_index) => {
						return (
							<TableRow hover key={"role_"+role_index}>
								<TableCell>
									{role.id}
								</TableCell>
								<TableCell>
									{role.name}
								</TableCell>
								<TableCell>
									{role["description_"+getL]}
								</TableCell>
								<TableCell>
									{role.modules.map((module, module_index) =>{
										return (
											<div key={"module_"+module_index}>
												{module["description_"+getL]}
											</div>
										);
									})}
								</TableCell>
							</TableRow>
						);
					})}
				</TableBody>
			</Table>
		</TableContainer>
	);

} 
export default RoleList;